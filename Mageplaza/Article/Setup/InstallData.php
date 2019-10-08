<?php

namespace Mageplaza\Articles\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Stdlib\DateTime\DateTime;

class InstallData implements InstallDataInterface
{
    protected $date;

    public function __construct(DateTime $date) {
        $this->date = $date;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $dataNewsRows = [
            [
                'title' => "Don't stop the clock at midnight, nightlife seekers tell Hanoi",
                'content' => "Hanoians wanting to let their hair down into the wee hours of the morning feel let down by the capital city's midnight curfew.",
                'image' => "article_01.webp"
            ],
            [
                'title' => "Get into the flow in a Mekong Delta mangrove forest",
                'content' => "Tra Su in An Giang Province is a mangrove forest with long waterways that become an exotic place to float through during flooding season.",
                'image' => "article_02.webp"
            ],
            [
                'title' => "In a fairly tale restart, lovers reconnect after 50 years",
                'content' => "‘I would have come back even if she was dead.’ An American war veteran never stopped looking for the Vietnamese woman he loved.",
                'image' => "article_03.webp"
            ],
            [
                'title' => "China prevents Vietnamese fishermen from recovering sunken vessel",
                'content' => "China has deliberately prevented Vietnamese fishermen from salvaging their boat that sank off Vietnam’s Paracel Islands.",
                'image' => "article_04.webp"
            ],
            [
                'title' => "Saigon drug haul up tenfold year-on-year: police",
                'content' => "Saigon police have seized over 1.6 tons of drugs since the beginning of this year, more than 10 times the same period last year.",
                'image' => "article_05.webp"
            ],
            [
                'title' => "'Victimless crime' notion in Vietnam undermines wildlife trafficking fight",
                'content' => "An expert rues that Vietnam's fight against wildlife trafficking is weakened by the perspective that it’s a less serious, ‘victimless crime.’",
                'image' => "article_06.webp"
            ],
            [
                'title' => "Vietnam coffee chains take their fight to the streets",
                'content' => "Major coffee brands like Highlands, Vinacafe and Passio are trying to win over new customers with street carts in places with heavy traffic",
                'image' => "article_07.webp"
            ],
            [
                'title' => "Hanoi to expand popular walking-only zone around Hoan Kiem Lake",
                'content' => "Hanoi authorities are working on a plan to expand the pedestrian-only zone around the capital's iconic Hoan Kiem (Sword) Lake to boost tourism.",
                'image' => "article_08.webp"
            ],
            [
                'title' => "Vietnamese passport does better in global power ranking",
                'content' => "The Vietnamese passport has moved up five places in the latest power ranking with visa free access to 51 destinations.",
                'image' => "article_09.webp"
            ],
            [
                'title' => "Injury rules out Vietnamese midfielder for 9 months",
                'content' => "National team midfielder Luong Xuan Truong will play no football for nine months after a serious injury sustained during training.",
                'image' => "article_10.webp"
            ],
            [
                'title' => "Hanoi FC end AFC Cup journey with goalless draw in second leg interzone final",
                'content' => "With a goalless draw in the second leg of the AFC Cup interzone final against North Korea’s 4.25 SC, Hanoi FC is out.",
                'image' => "article_11.webp"
            ],
            [
                'title' => "Vietnamese film with romantic spirit to premiere in the U.S.",
                'content' => "A Vietnamese feature film about a love that stays alive through centuries will be released in American cinemas this December.",
                'image' => "article_12.webp"
            ],
            [
                'title' => "Cam Ranh airport to open second runway next week",
                'content' => "The Cam Ranh International Airport near Nha Trang resort town will open its second runway to traffic on October 10, the Transport Ministry says.",
                'image' => "article_13.webp"
            ],
            [
                'title' => "Hanoi among world’s best places for coffee: CNN",
                'content' => "CNN has named Vietnam in the list of top places where its viewers and readers can find the best coffee in the world.",
                'image' => "article_14.webp"
            ]
        ];

        foreach($dataNewsRows as $data) {
            $setup->getConnection()->insert($setup->getTable('sm_article'), $data);
        }
    }
}