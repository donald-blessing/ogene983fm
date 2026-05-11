<?php

namespace App\Mail;

use App\Traits\UploadAble;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    use UploadAble;

    /**
     * Create a new message instance.
     */
    public function __construct(public $details) {}

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail = $this->subject($this->details['subject']);
        if (isset($this->details['attachment'])) {
            foreach ($this->details['attachment'] as $file) {
                // attach the file
                $mail->attach($file);
            }
        }
        if ($this->details['from']) {
            $mail = $this->from($this->details['from']);
        }

        return $mail->view('emails.sendMail');
    }
}
