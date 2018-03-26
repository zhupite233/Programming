<?php
/**
 * TOP API: rds.aliyuncs.com.CreateDatabase.2013-05-28 request
 * 
 * @author auto create
 * @since 1.0, 2015.04.21
 */
class Rds20130528CreateDatabaseRequest
{
	/** 
	 * 数据库帐户名
	 **/
	private $accountName;
	
	/** 
	 * 帐号权限
	 **/
	private $accountPrivilege;
	
	/** 
	 * 字符集
	 **/
	private $characterSetName;
	
	/** 
	 * 数据库描述
	 **/
	private $dBDescription;
	
	/** 
	 * 实例名
	 **/
	private $dBInstanceId;
	
	/** 
	 * 数据库名
	 **/
	private $dBName;
	
	/**
	 * 仅用于渠道商发起API调用时，指定访问的资源拥有者的ID
	 **/
	private $ownerId;
	
	/**
	 *仅用于渠道商发起API调用时，指定访问的资源拥有者的账号
	 **/
    private  $ownerAccount;
    
    /**
     *API调用者试图通过API调用来访问别人拥有但已经授权给他的资源时，
     *通过使用该参数来声明此次操作涉及到的资源是谁名下的,该参数仅官网用户可用
     **/
    private $resourceOwnerAccount;
    
	private $apiParas = array();
	
	public function setAccountName($accountName)
	{
		$this->accountName = $accountName;
		$this->apiParas["AccountName"] = $accountName;
	}

	public function getAccountName()
	{
		return $this->accountName;
	}

	public function setAccountPrivilege($accountPrivilege)
	{
		$this->accountPrivilege = $accountPrivilege;
		$this->apiParas["AccountPrivilege"] = $accountPrivilege;
	}

	public function getAccountPrivilege()
	{
		return $this->accountPrivilege;
	}

	public function setCharacterSetName($characterSetName)
	{
		$this->characterSetName = $characterSetName;
		$this->apiParas["CharacterSetName"] = $characterSetName;
	}

	public function getCharacterSetName()
	{
		return $this->characterSetName;
	}

	public function setdBDescription($dBDescription)
	{
		$this->dBDescription = $dBDescription;
		$this->apiParas["DBDescription"] = $dBDescription;
	}

	public function getdBDescription()
	{
		return $this->dBDescription;
	}

	public function setdBInstanceId($dBInstanceId)
	{
		$this->dBInstanceId = $dBInstanceId;
		$this->apiParas["DBInstanceId"] = $dBInstanceId;
	}

	public function getdBInstanceId()
	{
		return $this->dBInstanceId;
	}

	public function setdBName($dBName)
	{
		$this->dBName = $dBName;
		$this->apiParas["DBName"] = $dBName;
	}

	public function getdBName()
	{
		return $this->dBName;
	}

	
	public function setOwnerId($ownerId)
	{
		$this->ownerId = $ownerId;
		$this->apiParas["OwnerId"] = $ownerId;
	}
	
	public function getOwnerId()
	{
		return $this->ownerId;
	}
	
	public function setOwnerAccount($ownerAccount)
	{
		$this->ownerAccount = $ownerAccount;
		$this->apiParas["OwnerAccount"] = $ownerAccount;
	}
	
	public function getOwnerAccount()
	{
		return $this->ownerAccount;
	}
	
	public function setResourceOwnerAccount($resourceOwnerAccount)
	{
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->apiParas["ResourceOwnerAccount"] = $resourceOwnerAccount;
	}
	
	public function getResourceOwnerAccount()
	{
		return $this->resourceOwnerAccount;
	}

	public function getApiMethodName()
	{
		return "rds.aliyuncs.com.CreateDatabase.2013-05-28";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->characterSetName,"characterSetName");
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
		RequestCheckUtil::checkNotNull($this->dBName,"dBName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}