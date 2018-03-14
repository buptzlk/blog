<?php

namespace App\Jobs;

use App\Http\Controllers\Article;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Article as Articles;
use Carbon\Carbon;
class ArticleFormFields implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * The id (if any) of the Post row
     *
     * @var integer
     */
    protected $id;

    /**
     * List of fields and default value for each field
     *
     * @var array
     */
    protected $fieldList = [
        'title' => '',
        'summary' => '',
        'content' => '',
        'user_id' => '',
        'deleted_at' => '',
        'created_at' => "0",
        'publish_date' => '',
        'updated_at' => '',
        'tags' => [],
    ];

    /**
     * Create a new command instance.
     *
     * @param integer $id
     */
    public function __construct($id = null)
    {
        $this->id = $id;
    }

    /**
     * Execute the command.
     *
     * @return array of fieldnames => values
     */
    public function handle()
    {
        if ($this->id) {
            $fields = $this->fieldsFromModel($this->id, $this->fieldList);
        }
        foreach ($fields as $fieldName => $fieldValue) {
            $fields[$fieldName] = old($fieldName, $fieldValue);
        }

        return array_merge(
            $fields,
            ['tags' => Tag::lists('name')->all()]
        );
    }

    /**
     * Return the field values from the model
     *
     * @param integer $id
     * @param array $fields
     * @return array
     */
    protected function fieldsFromModel($id, array $fields)
    {
        $post = Articles::findOrFail($id);

        $fieldNames = array_keys(array_except($fields, ['tags']));

        $fields = ['id' => $id];
        foreach ($fieldNames as $field) {
            $fields[$field] = $post->{$field};
        }

        $fields['tags'] = $post->tags()->lists('tag')->all();

        return $fields;
    }
}
