<?php

class Word
{
    private $original;
    private $translation;
    // TODO: add word (FR) and answer (EN) - (via constructor or not? why?)

    public function __construct(string $original, string $translation) {
        $this->original = $original;
        $this->translation = $translation;
    }
    public function getOriginal() {
        return $this->original;
    }
    public function getTranslation() {
        return $this->translation;
    }
    public function verify(string $answer): bool
    {
        return strtolower($answer) === strtolower($this->translation);
        // TODO: use this function to verify if the provided answer by the user matches the correct one
        // Bonus: allow answers with different casing (example: both bread or Bread can be correct answers, even though technically it's a different string)
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
    }
}
