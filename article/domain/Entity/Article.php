<?php

class Article
{
    use Validatable;
    private $id;
    private $title;
    private $content;
    private $status;
    private $createdAt;
    private $publishedAt;

    public function __construct($title, $content, $createdAt = null)
    {
        $this->validate();
        $this->setTitle($title);
        $this->setContent($content);
        $this->status = Status::draft();
        $this->setCreatedAt($createdAt ?? new DateTimeImmutable());
    }

    /**
     * Validation of fields
     * @todo: Move validation to a validation handler and create an ArticleValidation class
     */
    private function validate(): void
    {
        $this->assertMinLength($this->title, 5);
        $this->assertMaxLength($this->title, 255);
        $this->assertMinLength($this->content, 30);
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
//        DomainEventPublisher::instance()->publish(
//            new ArticlePublished($this->id)
//        );
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
    public function getTitle()
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
    public function getContent()
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

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }
}
