<?php
namespace PeterBenke\PbNewsJobs\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Peter Benke <peter.benke@nttdata.com>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * News model
 *
 * @package TYPO3
 * @subpackage tx_news
 */
class News extends \GeorgRinger\News\Domain\Model\News {

	/**
	 * @var string
	 */
	protected $txPbnewsjobsEntrydate;

	/**
	 * @var string
	 */
	protected $txPbnewsjobsLocation;

	/**
	 * @var string
	 */
	protected $txPbnewsjobsArea;

	/**
	 * @var string
	 */
	protected $txPbnewsjobsPosition;

	/**
	 * @var string
	 */
	protected $txPbnewsjobsJobnumber;

	/**
	 * @var string
	 */
	protected $txPbnewsjobsPayment;

	/**
	 * @var string
	 */
	protected $txPbnewsjobsTasks;

	/**
	 * @var string
	 */
	protected $txPbnewsjobsRequirements;

	/**
	 * @var string
	 */
	protected $txPbnewsjobsContact;

	/**
	 * @param string $txPbnewsjobsEntrydate
	 */
	public function setTxPbnewsjobsEntrydate($txPbnewsjobsEntrydate){
		$this->txPbnewsjobsEntrydate = $txPbnewsjobsEntrydate;
	}

	/**
	 * @return string
	 */
	public function getTxPbnewsjobsEntrydate(){
		return $this->txPbnewsjobsEntrydate;
	}

	/**
	 * @param string $txPbnewsjobsLocation
	 */
	public function setTxPbnewsjobsLocation($txPbnewsjobsLocation){
		$this->txPbnewsjobsLocation = $txPbnewsjobsLocation;
	}

	/**
	 * @return string
	 */
	public function getTxPbnewsjobsLocation(){
		return $this->txPbnewsjobsLocation;
	}

	/**
	 * @param string $txPbnewsjobsArea
	 */
	public function setTxPbnewsjobsArea($txPbnewsjobsArea){
		$this->txPbnewsjobsArea = $txPbnewsjobsArea;
	}

	/**
	 * @return string
	 */
	public function getTxPbnewsjobsArea(){
		return $this->txPbnewsjobsArea;
	}

	/**
	 * @param string $txPbnewsjobsPosition
	 */
	public function setTxPbnewsjobsPosition($txPbnewsjobsPosition){
		$this->txPbnewsjobsPosition = $txPbnewsjobsPosition;
	}

	/**
	 * @return string
	 */
	public function getTxPbnewsjobsPosition(){
		return $this->txPbnewsjobsPosition;
	}

	/**
	 * @param string $txPbnewsjobsJobnumber
	 */
	public function setTxPbnewsjobsJobnumber($txPbnewsjobsJobnumber){
		$this->txPbnewsjobsJobnumber = $txPbnewsjobsJobnumber;
	}

	/**
	 * @return string
	 */
	public function getTxPbnewsjobsJobnumber(){
		return $this->txPbnewsjobsJobnumber;
	}


	/**
	 * @param string $txPbnewsjobsPayment
	 */
	public function setTxPbnewsjobsPayment($txPbnewsjobsPayment){
		$this->txPbnewsjobsPayment = $txPbnewsjobsPayment;
	}

	/**
	 * @return string
	 */
	public function getTxPbnewsjobsPayment(){
		return $this->txPbnewsjobsPayment;
	}

	/**
	 * @param string $txPbnewsjobsTasks
	 */
	public function setTxPbnewsjobsTasks($txPbnewsjobsTasks){
		$this->txPbnewsjobsTasks = $txPbnewsjobsTasks;
	}

	/**
	 * @return string
	 */
	public function getTxPbnewsjobsTasks(){
		return $this->txPbnewsjobsTasks;
	}

	/**
	 * @param string $txPbnewsjobsRequirements
	 */
	public function setTxPbnewsjobsRequirements($txPbnewsjobsRequirements){
		$this->txPbnewsjobsRequirements = $txPbnewsjobsRequirements;
	}

	/**
	 * @return string
	 */
	public function getTxPbnewsjobsRequirements(){
		return $this->txPbnewsjobsRequirements;
	}

	/**
	 * @param string $txPbnewsjobsContact
	 */
	public function setTxPbnewsjobsContact($txPbnewsjobsContact){
		$this->txPbnewsjobsContact = $txPbnewsjobsContact;
	}

	/**
	 * @return string
	 */
	public function getTxPbnewsjobsContact(){
		return $this->txPbnewsjobsContact;
	}

}