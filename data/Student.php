<?php

class Student
{
    public string $name;
    public string $id;
    public int $value;
    private string $sample;

    public function setSample(string $sample)
    {
        $this->sample = $sample;
    }

    // Jika ingin menyalin beberapa properties saja (apa aja yang bisa di clone)
    public function __clone()
    {
        unset($this->sample);
    }

    //Beda pembahasan,pembahasan....
    // Magic Function
    public function __toString(): string
    {
        return "Nama : $this->name, id : $this->id, value : $this->value" . PHP_EOL;
    }

    public function __invoke(...$input): void
    {
        $join = join(",", $input);
        echo "Invoke student with argument $join" . PHP_EOL;
    }

    public function __debugInfo(): array
    {
        return [
            "nama" => $this->name,
            "id" => $this->id,
            "value" => $this->value,
            "sample" => $this->sample,
            "author" => "iqbal",
            "version" => "1.0.0",
        ];
    }
}
