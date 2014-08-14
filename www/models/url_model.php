<?php if (!  defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 音乐制品合同备案模型
 *
 * @author      $Author: hegw $
 * @category    Project 
 * @version     $Revision: 115 $
 * @create_date $Date: 2014-07-25 16:05:46 +0800 (五, 25  7 2014) $
 *
 */
 
class Url_model extends My_Model
{

    protected $table				= 'web_url';		//表名
    protected $pkey					= 'id';				//主键名称
    protected $CATEGORY_LINK		= 1;
    protected $CATEGORY_TOOL		= 2;
    protected $CATEGORY_RESOURCE	= 3;
    
    public static $ci;
    /**
     * 构造函数
     *
     * @access public
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        if( empty(self::$ci -> db) )
        {
        	$this -> load -> database();
        }
    }

     

              
      
	
	/**
	 * 取用户的合同列表
	 *
	 * @param int $uid
	 * @param string $select
	 * @param string/array $where
	 * @return Ambigous <multitype:, multitype:number unknown >
	 */
	public function get_user_url_list($uid , $ids )
	{
		if( !is_array($ids) )
		{
			$ids = explode (',', $ids);
		}
		self::$dbread -> select('url,id,name,tag');
		self::$dbread -> where('uid',$uid);
		self::$dbread -> where_in('id',$ids);
		$query 		= self::$dbread  -> get( $this->table );
		$results 	= $query -> result_array(); 
		 
		return $results;
	}
 
	/**
	 * 删除用户合同
	 * 
	 * @param type $ids
	 * @param type $uid
	 * @return boolean
	 */
	public function delete_user_url($user_id,$ids)
	{
		if( !empty( $ids ) )
		{
			if(! is_array($ids) )
			{
				$ids = explode(',', $ids);
			} 
			 
			//删除链接
			self::$dbwrite -> where_in('id', $ids); 
			self::$dbwrite -> where('user_id', $user_id);
			self::$dbwrite -> delete($this->table);  
			return $num;
		}
		return false;
	}
	/**
	 * 链接
	 * @param int $num
	 */       
	public function get_top_links($num = 10)
	{
		$this -> db -> select('url,name,id');
		$this -> db -> where('category_id',$this -> CATEGORY_LINK );
		$this -> db -> order_by('list_order ASC');
		$query = $this -> db -> get($this -> table,$num);
		return $query -> result_array();
	}
	/**
	 * 工具
	 * @param int $num
	 */
	public function get_top_tools($num = 10)
	{
		$this -> db -> select('url,name,id');
		$this -> db -> where('category_id',$this -> CATEGORY_TOOL );
		$this -> db -> order_by('list_order ASC');
		$query = $this -> db -> get($this -> table,$num);
		return $query -> result_array();
	}
	/**
	 * 软件下载
	 * @param int $category_id
	 * @param int $type_id
	 * @param int $num
	 */
	public function get_top_downloads($category_id,$type_id, $num = 10)
	{
		$this -> db -> select('url,name,id');
		$this -> db -> where('category_id',	$category_id );
		$this -> db -> where('type_id',		$type_id );
		$this -> db -> order_by('list_order ASC');
		$query = $this -> db -> get($this -> table,$num);
		return $query -> result_array();
	}
}
