<?php

namespace PeterBenke\PbNewsJobs\Domain\Model;

/**
 * News
 */

use GeorgRinger\News\Domain\Model\News as GeorgRingerNews;

/**
 * News model
 *
 * @package TYPO3
 * @subpackage tx_news
 */
class News extends GeorgRingerNews
{

    /**
     * @var string|null
     */
    protected ?string $txPbnewsjobsEntrydate;

    /**
     * @var string|null
     */
    protected ?string $txPbnewsjobsLocation;

    /**
     * @var string|null
     */
    protected ?string $txPbnewsjobsArea;

    /**
     * @var string|null
     */
    protected ?string $txPbnewsjobsPosition;

    /**
     * @var string|null
     */
    protected ?string $txPbnewsjobsJobnumber;

    /**
     * @var string|null
     */
    protected ?string $txPbnewsjobsPayment;

    /**
     * @var string|null
     */
    protected ?string $txPbnewsjobsTasks;

    /**
     * @var string|null
     */
    protected ?string $txPbnewsjobsRequirements;

    /**
     * @var string|null
     */
    protected ?string $txPbnewsjobsContact;

    /**
     * @param string|null $txPbnewsjobsEntrydate
     */
    public function setTxPbnewsjobsEntrydate(?string $txPbnewsjobsEntrydate): void
    {
        $this->txPbnewsjobsEntrydate = $txPbnewsjobsEntrydate;
    }

    /**
     * @return string|null
     */
    public function getTxPbnewsjobsEntrydate(): ?string
    {
        return $this->txPbnewsjobsEntrydate;
    }

    /**
     * @param string|null $txPbnewsjobsLocation
     */
    public function setTxPbnewsjobsLocation(?string $txPbnewsjobsLocation): void
    {
        $this->txPbnewsjobsLocation = $txPbnewsjobsLocation;
    }

    /**
     * @return string|null
     */
    public function getTxPbnewsjobsLocation(): ?string
    {
        return $this->txPbnewsjobsLocation;
    }

    /**
     * @param string|null $txPbnewsjobsArea
     */
    public function setTxPbnewsjobsArea(?string $txPbnewsjobsArea): void
    {
        $this->txPbnewsjobsArea = $txPbnewsjobsArea;
    }

    /**
     * @return string|null
     */
    public function getTxPbnewsjobsArea(): ?string
    {
        return $this->txPbnewsjobsArea;
    }

    /**
     * @param string|null $txPbnewsjobsPosition
     */
    public function setTxPbnewsjobsPosition(?string $txPbnewsjobsPosition): void
    {
        $this->txPbnewsjobsPosition = $txPbnewsjobsPosition;
    }

    /**
     * @return string|null
     */
    public function getTxPbnewsjobsPosition(): ?string
    {
        return $this->txPbnewsjobsPosition;
    }

    /**
     * @param string|null $txPbnewsjobsJobnumber
     */
    public function setTxPbnewsjobsJobnumber(?string $txPbnewsjobsJobnumber): void
    {
        $this->txPbnewsjobsJobnumber = $txPbnewsjobsJobnumber;
    }

    /**
     * @return string|null
     */
    public function getTxPbnewsjobsJobnumber(): ?string
    {
        return $this->txPbnewsjobsJobnumber;
    }


    /**
     * @param string|null $txPbnewsjobsPayment
     */
    public function setTxPbnewsjobsPayment(?string $txPbnewsjobsPayment): void
    {
        $this->txPbnewsjobsPayment = $txPbnewsjobsPayment;
    }

    /**
     * @return string|null
     */
    public function getTxPbnewsjobsPayment(): ?string
    {
        return $this->txPbnewsjobsPayment;
    }

    /**
     * @param string|null $txPbnewsjobsTasks
     */
    public function setTxPbnewsjobsTasks(?string $txPbnewsjobsTasks): void
    {
        $this->txPbnewsjobsTasks = $txPbnewsjobsTasks;
    }

    /**
     * @return string|null
     */
    public function getTxPbnewsjobsTasks(): ?string
    {
        return $this->txPbnewsjobsTasks;
    }

    /**
     * @param string|null $txPbnewsjobsRequirements
     */
    public function setTxPbnewsjobsRequirements(?string $txPbnewsjobsRequirements): void
    {
        $this->txPbnewsjobsRequirements = $txPbnewsjobsRequirements;
    }

    /**
     * @return string|null
     */
    public function getTxPbnewsjobsRequirements(): ?string
    {
        return $this->txPbnewsjobsRequirements;
    }

    /**
     * @param string|null $txPbnewsjobsContact
     */
    public function setTxPbnewsjobsContact(?string $txPbnewsjobsContact): void
    {
        $this->txPbnewsjobsContact = $txPbnewsjobsContact;
    }

    /**
     * @return string|null
     */
    public function getTxPbnewsjobsContact(): ?string
    {
        return $this->txPbnewsjobsContact;
    }

}