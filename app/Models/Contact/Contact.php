<?php

declare(strict_types=1);

namespace App\Models\Contact;

use Database\Factories\Contact\ContactFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Contact\Contact
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contact\Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contact\Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contact\Contact query()
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $message
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contact\Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contact\Contact whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contact\Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contact\Contact whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contact\Contact whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contact\Contact whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contact\Contact whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contact\Contact whereUpdatedAt($value)
 * @method static \Database\Factories\Contact\ContactFactory factory($count = null, $state = [])
 * @mixin \Eloquent
 */
class Contact extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return ContactFactory::new();
    }

    protected $fillable = ['name', 'email', 'subject', 'message'];
}
