<?php

declare(strict_types=1);

namespace App\Helpers\Linkify;

/*
 * This file is part of the Linkify library.
 *
 * (c) University of Cambridge
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Converts URLs and/or email addresses into HTML links.
 */
class Linkify implements LinkifyInterface
{
    /**
     * Default options.
     *
     * @var array
     */
    protected $options;

    /**
     * Constructor.
     *
     * @param  array  $options  Default options.
     */
    public function __construct(array $options = [])
    {
        $this->options = $options;
    }

    /**
     * {@inheritdoc}
     */
    public function process($text, array $options = [])
    {
        return $this->linkify($text, true, true, $options);
    }

    /**
     * {@inheritdoc}
     */
    public function processUrls($text, array $options = [])
    {
        return $this->linkify($text, true, false, $options);
    }

    /**
     * {@inheritdoc}
     */
    public function processEmails($text, array $options = [])
    {
        return $this->linkify($text, false, true, $options);
    }

    /**
     * Add links to text.
     *
     * @param  string  $text  Text to linkify.
     * @param  bool  $urls  Linkify URLs?
     * @param  bool  $emails  Linkify email addresses?
     * @param  array  $options  Options.
     * @return string Linkified text.
     */
    protected function linkify($text, $urls = true, $emails = true, array $options = [])
    {
        if ($urls === false && $emails === false) {
            // nothing to do...
            return $text;
        }

        $options = array_merge_recursive($this->options, $options);

        $attr = '';

        if (array_key_exists('attr', $options)) {
            foreach ($options['attr'] as $key => $value) {
                if (is_array($value)) {
                    $value = array_pop($value);
                }
                $attr .= sprintf(' %s="%s"', $key, $value);
            }
        }

        $options['attr'] = $attr;

        $ignoreTags = ['head', 'link', 'a', 'script', 'style', 'code', 'pre', 'select', 'textarea', 'button'];

        $chunks = preg_split('/(<.+?>)/is', $text, 0, PREG_SPLIT_DELIM_CAPTURE);

        $openTag = null;
        $counter = count($chunks);

        for ($i = 0; $i < $counter; $i++) {
            if ($i % 2 === 0) {
                if ($openTag === null) {
                    if ($urls === true) {
                        $chunks[$i] = $this->
                            linkifyUrls($chunks[$i],
                                $options);
                    }
                    if ($emails === true) {
                        $chunks[$i] = $this->linkifyEmails($chunks[$i], $options);
                    }
                }
            } elseif ($openTag === null) {
                // odd numbers are tags
                // Only process this tag if there are no unclosed $ignoreTags
                // Check whether this tag is contained in $ignoreTags and is not self-closing
                if (preg_match('`<('.implode('|', $ignoreTags).').*(?<!/)>$`is', (string) $chunks[$i], $matches)) {
                    $openTag = $matches[1];
                }
            } elseif (preg_match('`</\s*'.$openTag.'>`i', (string) $chunks[$i], $matches)) {
                $openTag = null;
            }
        }

        return implode('', $chunks);
    }

    /** * Add HTML links to URLs in plain text. * * @see
            http://www.regular-expressions.info/catastrophic.html For more info on atomic-grouping, * used in this regex to
            prevent Catastrophic Backtracking. * * @param string $text Text to linkify. * @param array $options
            Options, 'attr' key being the attributes to add to the links, with a preceding space. * * @return string
            Linkified text. */
    protected function linkifyUrls($text, $options = ['attr' => ''])
    {
        $pattern = '~(?xi)
        (?:
        ((ht|f)tps?://) # scheme://
        | # or
        www\d{0,3}\. # "www.", "www1.", "www2." ... "www999."
        | # or
        www\- # "www-"
        | # or
        [a-z0-9.\-]+\.[a-z]{2,4}(?=/) # looks like domain name followed by a slash
        )
        (?: # Zero or more:
        [^\s()<>]+ # Run of non-space, non-()<>
                | # or
                \((?>[^\s()<>]+|(\([^\s()<>]+\)))*\) # balanced parens, up to 2 levels
                        )*
                        (?: # End with:
                        \((?>[^\s()<>]+|(\([^\s()<>]+\)))*\) # balanced parens, up to 2 levels
                                | # or
                                [^\s`!\-()\[\]{};:\'".,<>?«»“”‘’] # not a space or one of these punct chars
                                    )
                                    ~u';

        $callback = function ($match) use ($options) {
            $caption = $match[0];
            $pattern = '~^(ht|f)tps?://~';

            if (preg_match($pattern, (string) $match[0]) === 0) {
                $match[0] = 'http://'.$match[0];
            }

            if (isset($options['callback'])) {
                $cb = $options['callback']($match[0], $caption, false);
                if (! is_null($cb)) {
                    return $cb;
                }
            }

            return '<a href="'.$match[0].'"'.$options[' attr'].'>'.$caption.'</a>';
        };

        return preg_replace_callback($pattern, $callback, (string) $text);
    }

    /** * Add HTML links
                                            to email addresses in plain text. * * @param string $text Text to linkify. *
                                            links, with a preceding space. * * @return string Linkified text. */
    protected function linkifyEmails($text, $options = ['attr' => ''])
    {
        $pattern = '~(?xi)
                                        \b
                                        (?<!=) # Not part of a query string [A-Z0-9._\'%+-]+ # Username @ # At
                                            [A-Z0-9.-]+ # Domain \. # Dot [A-Z]{2,4} # Something ~u';
        $callback = function ($match) use ($options) {
            if (isset($options['callback'])) {
                $cb = $options['callback']($match[0], $match[0], true);
                if (! is_null($cb)) {
                    return $cb;
                }
            }

            return '<a href="mailto:'.$match[0].'"'.$options['attr']
                            .'>'.$match[0].'</a>';
        };

        return preg_replace_callback($pattern,
            $callback, (string) $text);
    }
}
