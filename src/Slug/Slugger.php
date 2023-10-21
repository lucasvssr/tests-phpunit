<?php

declare(strict_types=1);

namespace Slug;

class Slugger
{
    public string $slugify;

    public function slugify(string $subject): string
    {
        $subject = strip_tags($subject);
        $subject = html_entity_decode($subject, ENT_QUOTES | ENT_HTML5);
        $subject = mb_strtolower($subject);
        $subject = transliterator_transliterate('Any-Latin; Latin-ASCII', $subject);
        $subject = preg_replace('/[^a-z0-9]+/', '-', $subject);
        return trim($subject, '-');
    }
}
