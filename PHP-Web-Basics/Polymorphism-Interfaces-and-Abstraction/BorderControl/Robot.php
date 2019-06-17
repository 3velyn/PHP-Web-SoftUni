<?php

namespace BorderControl;

class Robot implements IdentificationInterface
{
    /** @var string */
    private $model;

    /** @var string */
    private $id;

    public function __construct(string $model, string $id)
    {
        $this->setId($id);
        $this->setModel($model);
    }

    /**
     * @param string $id
     */
    private function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param string $model
     */
    private function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    public function idVerification(string $fakeIdDigits): bool
    {
        if (substr($this->getId(), strlen($fakeIdDigits) * -1) === $fakeIdDigits) {
            return true;
        }
        return false;
    }
}