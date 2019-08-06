<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use \Otus\Models\Message;


class MessageTest extends TestCase
{
    public function testGetInstance()
    {
        $this->assertInstanceOf(
            Message::class,
            new Message()
        );
    }


    public function testIsNotSingleton()
    {
        $first = new Message();
        $first->message = 321;
        $second = new Message();
        $this->assertNotEquals(
            $first,
            $second
        );
    }

    /**
     * @var int $status
     * @var string $messageString
     * @dataProvider messages provider
     */
    public function testStatusMessages($status, $messageString)
    {
        $message = new Message();
        $message->id = 1;
        $message->status = $status;
        $this->assertEquals(
            $message->getStringStatus(),
            $messageString
        );
    }

    public function messages()
    {
        return [
            [Message::STATUS_NEW, 'Message with id "1" has status "Ожидает рассмотрения".'],
            [Message::STATUS_ACCEPTED, 'Message with id "1" has status "Принято".'],
            [Message::STATUS_REJECTED, 'Message with id "1" has status "Отклонено".']
        ];
    }
}