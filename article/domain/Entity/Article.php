<?php

class Article
{
    private $title;
    private $content;
    private $status;
    private $createdAt;
    private $publishedAt;

    public function __construct($title, $content, $createdAt = null)
    {
        $this->setTitle($title);
        $this->setContent($content);
        $this->status = Status::draft();
        $this->setCreatedAt($createdAt ?? new DateTimeImmutable());
    }

    /**
     * @return Status
     */
    public function getStatus(): Status
    {
        return $this->status;
    }
    /**
     * @param Status $status
     */
    public function setStatus(Status $status): void
    {
        $this->status = $status;
    }

    /**
     * @throws Exception
     */
    public function publish(): void
    {
        $this->setStatus(Status::published());
        $this->setPublishedAt(new DateTimeImmutable());
    }

    /**
     * @param DateTimeImmutable $publishedDate
     */
    private function setPublishedAt(DateTimeImmutable $publishedDate): void
    {
        // @todo: Date validation
        $this->publishedAt = $publishedDate;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdDate
     */
    public function setCreatedAt(DateTimeImmutable $createdDate): void
    {
        $this->createdAt = $createdDate;
    }

    /**
     * @return mixed
     */
    private function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    private function setTitle($title): void
    {
        if (empty($title)) {
            throw new RuntimeException('Title cannot be empty');
        }
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    private function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    private function setContent($content): void
    {
        if (empty($content)) {
            throw new RuntimeException('Content cannot be empty');
        }
        $this->content = $content;
    }
}
