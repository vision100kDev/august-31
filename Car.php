<?php
declare(strict_types=1); // Making PHP very strict with data type.....

class Car {
    // Always make your properties private or least worst protected
    private string $type;
    private string $model;
    private int $year;
    private string $engineNumber;
    private string $chasisNumber;
    private string $color;

    // constructor method: It will run any time our class is being created or instantiated
    public function __construct(string $carType, string $carModel, int $carYear, string $carEngineNumber, string $carChasisNumber, string $carColor)
    {
        $this->type = $carType;
        $this->model = $carModel;
        $this->year = $carYear;
        $this->engineNumber = $carEngineNumber;
        $this->chasisNumber = $carChasisNumber;
        $this->color = $carColor;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $userNewTypeData): void
    {
        $this->type = $userNewTypeData;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getYearMultipliedBy100(): float|int
    {
        return $this->year * 10;
    }

    public function getEngineNumber(): string
    {
        return $this->engineNumber;
    }

    public function getChasisNumber(): string
    {
        return $this->chasisNumber;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}
