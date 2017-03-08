<?php
namespace Propal\FDJBundle\Model;

class Logger
{
	const INFO	= 'info';
	const DEBUG 	= 'debug';
	const WARNING	='warning';
	const EXTENSION = 'txt';

	private $directory;
	private $filename;

	public function __construct($directory, $filename)
	{
		$this->directory = $directory;
		$this->filename  = $filename;
	}
	public function add($level=self::INFO, $info)
	{
		$date = new \DateTime();
		$log  =str_pad($date->format('Y-m-d h:i:s'),20,"[",STR_PAD_LEFT).']';
		$log.='['.$level.']';
		$log.=$info;
		
		$file = $this->directory.'/'.$this->filename.'.'.self::EXTENSION;
		$handle = @fopen($file,'a');
		fputs($handle, "$log\r\n"); 
		fclose($handle);
	}
}
