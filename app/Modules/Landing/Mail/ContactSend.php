<?php
/**
 *  app/Modules/Landing/Mail/ContactSend.php
 *
 * Date-Time: 09.08.21
 * Time: 10:23
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Modules\Landing\Mail;

use App\Modules\Pages\Http\Resources\Client\PageMetaInfoResource;
use App\Modules\Pages\Models\Page;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSend extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var array
     */
    protected array $data;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): ContactSend
    {
//        $mailTo = Page::whereIn('name', [ Page::NAME_CONTACT])->firstOrFail();
        $mailTo = Page::where('name', Page::NAME_MAILER)->first();

        $mailTo = (new PageMetaInfoResource($mailTo->meta))->toArray()[0];

        return $this->from($mailTo["fields"]["email"]["value"], $this->data['name'])
            ->subject($mailTo["fields"]["subject"]["value"])->view('email.contact', ['data' => $this->data]);
    }
}
