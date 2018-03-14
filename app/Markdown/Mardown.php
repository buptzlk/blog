<?php
namespace App\Markdown;

class Markdown
{
    protected $parser;

    /**
     * Markdown constructor.
     * @param $parser
     */
    public function __construct(Parser $parser)
    {
        $this->parser = $parser;
    }

    // 转换文字
    public function toHtml($text)
    {
        return $this->parser->makeHtml($text);
    }
}
