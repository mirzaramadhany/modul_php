<?php 
/*class turunuan PDO standart untuk database*/
class mydb extends PDO {	
	private $cerror		= "" ; 

	public function __construct(){}

	public function connect($chost,$cuser,$cpassword,$cdb,$cengine="mysql",$cport="3306"){
		try {
			$cDNS	= $cengine . ":dbname=" . $cdb . ";host=" . $chost . ";port=" . $cport ; 
			parent::__construct($cDNS, $cuser , $cpassword ) ; 
			parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		parent::setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		} catch (PDOException $e) { 
			die("Connection not estalibed " . $e->getMessage() ) ; 
		}  
	}

	public function execute_sql($cquery){ 
		if($cquery !== ""){
			try {
				$dbdata			= parent::prepare($cquery) ; 
				$dbdata->execute() ;   
				return $dbdata ; 
			} catch (PDOException $e) {
				$this->cerror	= $e->getMessage() ;	
				print_r($this->cerror)  . print_r("your query : $cquery") ;
			} catch (Exception $e ){
				$this->cerror	= $e->getMessage() ;	
				print_r($this->cerror)  . print_r("your query : $cquery") ;
			}
		}
	}

	public function getrow($dbdata){
		if($dbdata !== null){
			if($this->cerror == ""){
				try { 
					$dbrow	 = $dbdata->fetch(PDO::FETCH_ASSOC) ; 
 
					if(!empty($dbrow) and is_array($dbrow)){
						foreach($dbrow as $cKey => $cValue){
							$dbrow[$cKey]	= stripslashes(trim( $this->utf8parse($cValue) )) ; 	
						}  
					} 
					return $dbrow ;   
				} catch (PDOException $e) {  
					$this->cerror	= $e->getMessage() ;	
					echo $this->cerror . " your query : $cQuery"; 	
				}
			}else{ 
				echo($this->cerror) ;	
			} 
		}
	}  

	public function rows($dbdata){
		if($dbdata !== null){
			return $dbdata->rowCount() ; 
		} 
	}

	public function utf8parse($text,$lencode=false){
		if($lencode) $text 	= utf8_encode($text) ; 
		return iconv(mb_detect_encoding($text, mb_detect_order(), true), "UTF-8", $text);
	}
}
?>