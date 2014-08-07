<?php
class My_Model extends CI_Model
{
	static $ci ; 
	var $table_recycle = 'web_recyle';
	var $cache_time = 3600;
	
	function __construct()
	{
		parent::__construct();
		self::$ci = & get_instance();
		$this -> load -> driver('cache',array('adapter' => 'file'));
		
	}
	
	/**
	 * 根据主键或查询条件取一条数据
	 *
	 * @param int $id
	 * @param unknown_type $select
	 * @return Ambigous <boolean, multitype:>
	 */
	function get($id, $select = '*')
	{
		$this->db->where($this->pkey,$id);
		$this -> db -> select($select);
		$query = $this -> db -> get( $this -> table , 1);
		return $query -> row_array();
	}
	
	/**
	 * 添加数据
	 *
	 * @param array 	$info
	 */
	function insert($info)
	{
		if(!is_array($info))
			return false;
		$this -> db -> insert($this -> table,$info);
		return $this->db->insert_id();
	}
	
	/**
	 * 更新数据
	 * @param unknown_type $info
	 * @param unknown_type $id
	 * @return Ambiguous|boolean
	 */
	function update($info,$id)
	{
		if( is_array($info) )
		{
			return $this -> db -> update($this -> table,$info,array($this->pkey => $id));
		}
		return false;
	}
	
	/**
	 * 删除数据
	 * @param int $id
	 * @return boolean
	 */
	function delete($id)
	{
		if( !is_array($id) )
		{
			$id = explode(',' , $id);
		}
		$this -> db -> where_in( $this->pkey , $id );
		return $this -> db -> delete( $this->table );
	}
	
	/**
	 * 放入回收站,flag不为空时，标示删除，否则真实删除
	 *
	 * @param array或int $ids
	 * @param string 		$title 	标题字段名
	 * @param string 		$flag	删除标识
	 * @return boolean
	 *
	 */
	function recycle ($ids, $title = null , $flag = null)
	{
		$this -> db -> where_in( $this->pkey , $ids );
		$query 	= $this -> db -> get($this->table);
		$data 	= $query -> result_array();
	
		if ($data) {
			//回收站数据
			foreach ( ( array ) $data as $key => $value )
			{
				$recycle = array ('item_title' => !empty($title) ? $value[$title] : $this->table,
						'drop_time' => time (),
						'item_value' => serialize ( $value ),
						'recycle_type' => !empty($flag)   );
				$this->db->insert ( $this->table_recycle , $recycle );
			}
			$this -> db ->where_in($this->pkey,$ids);
			$this -> db ->delete($this->table);
			return true;
		} else {
			return false;
		}
	}
	
	
	/**
	 * 从缓存记录中取信息，当表数据量大时，可用此方法缓存某一条记录
	 * @param int $id		数据ID
	 * @param int $time		缓存时间,单位时秒
	 * @return Ambigous <number, multitype:, boolean, unknown>
	 */
	function cache_get($id)
	{
		$table = str_replace('`','', $this->table);
		$table = str_replace('.','_', $table);
		$cache_name = 'table_'.$table.'_'.$id;
		$result = $this->cache->get($cache_name);
		if( empty($result) )
		{
			$result = self::get($id);
			if( !empty($result) )
			{
				$this->cache->save($cache_name,$result,$this->cache_time);
			}
		}
		return $result;
	}
	
	/**
	 * 清除以主键ID缓存的数据
	 * @param int $id
	 */
	
	function cache_clear($id = null)
	{
		$table = str_replace('`','', $this->table);
		$table = str_replace('.','_', $table);
		$cache_name = 'table_'.$table.'_'.$id;
		$this->cache->delete($cache_name);
	}
}