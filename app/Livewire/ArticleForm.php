<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleForm extends Component
{
    public $genre;
    public $title;
    public $subtitle;
    public $body;

    public function storeArticle()
    {
        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'genre' => $this->genre,
            'body' => $this->body
        ]);
        session()->flash('success', 'Articolo creato');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.article-form');
    }
}
