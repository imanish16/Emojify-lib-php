<?php

namespace EmojifyPHP;

class EmojiConverter {
    private $emojiMap;

    public function __construct(array $emojiMap = []) {
        // Default emoji mappings
        $this->emojiMap = array_merge([
            'happy' => '😊',
            'sad' => '😢',
            'love' => '❤️',
            // Add more default mappings as needed
        ], $emojiMap);
    }

    public function convertTextToEmoji(string $text): string {
        foreach ($this->emojiMap as $keyword => $emoji) {
            $text = str_ireplace($keyword, $emoji, $text);
        }
        return $text;
    }
}

// Usage example
$converter = new EmojiConverter();

$text = "I'm feeling happy today! :)";
$convertedText = $converter->convertTextToEmoji($text);
echo "Original text: $text" . PHP_EOL;
echo "Converted text: $convertedText" . PHP_EOL;