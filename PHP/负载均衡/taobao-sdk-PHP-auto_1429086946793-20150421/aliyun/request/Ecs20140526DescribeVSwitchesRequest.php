<?php
/**
 * TOP API: ecs.aliyuncs.com.DescribeVSwitches.2014-05-26 request
 * 
 * @author auto create
 * @since 1.0, 2015.04.21
 */
class Ecs20140526DescribeVSwitchesRequest
{
	/** 
	 * 实例状态列表的页码，起始值为1，默认值为1
	 **/
	private $pageNumber;
	
	/** 
	 * 分页查询时设置的每页行数，最大值50行，默认为10
	 **/
	private $pageSize;
	
	/** 
	 * 需要查询的虚拟交换机的Id
	 **/
	private $vSwitchId;
	
	/** 
	 * 虚拟网络Id
	 **/
	private $vpcId;
	
	/** 
	 * 可用区Id
	 **/
	private $zoneId;
	
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
	
	public function setPageNumber($pageNumber)
	{
		$this->pageNumber = $pageNumber;
		$this->apiParas["PageNumber"] = $pageNumber;
	}

	public function getPageNumber()
	{
		return $this->pageNumber;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["PageSize"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setvSwitchId($vSwitchId)
	{
		$this->vSwitchId = $vSwitchId;
		$this->apiParas["VSwitchId"] = $vSwitchId;
	}

	public function getvSwitchId()
	{
		return $this->vSwitchId;
	}

	public function setVpcId($vpcId)
	{
		$this->vpcId = $vpcId;
		$this->apiParas["VpcId"] = $vpcId;
	}

	public function getVpcId()
	{
		return $this->vpcId;
	}

	public function setZoneId($zoneId)
	{
		$this->zoneId = $zoneId;
		$this->apiParas["ZoneId"] = $zoneId;
	}

	public function getZoneId()
	{
		return $this->zoneId;
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
		return "ecs.aliyuncs.com.DescribeVSwitches.2014-05-26";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->pageNumber,1,"pageNumber");
		RequestCheckUtil::checkMaxValue($this->pageSize,50,"pageSize");
		RequestCheckUtil::checkNotNull($this->vpcId,"vpcId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}