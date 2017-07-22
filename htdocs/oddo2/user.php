<?php
include "ripcord/ripcord.php";
class User {
	public $uid;
    public $db;
    public $url;
    public $user;
    public $pass;
    public $model;
   // $orderline;
   
	public $invoiceid;
 public function __construct($url, $user, $pass, $db) {
		$this->url = $url;
        $this->user = $user;
        $this->pass = $pass;
        $this->db = $db;
        $common = ripcord::client("$url/xmlrpc/2/common", null, null);
        $this->uid = $common->authenticate($db, $user, $pass, array());
        $this->model = ripcord::client("$url/xmlrpc/2/object");
        $this->orderline = array();
    }
public function TampilProduk() {
		
        $res = $this->model->execute_kw(
                $this->db, $this->uid, $this->pass, 'product.product', 'search_read', array(
            array(
            
            ),
                ), array(
            'fields' => array(
                'id',
                'display_name',
                'standard_price',
                'lst_price',
                'qty_available',
                'image',
            ),
                )
        );
        return $res;
    }
public function PencarianProduk($kolom,$nilai) {
        $res = $this->model->execute_kw(
                $this->db, $this->uid, $this->pass, 'product.product', 'search_read', array(
            array(
                array($kolom, '=', $nilai),
            ),
                ), array(
            'fields' => array(
                'id',
                'display_name',
                'standard_price',
                'lst_price',
                'qty_available',
                'image',
            ),
                )
        );
        return $res;
    }

public function buatpesanan($id_partner,$id_produk,$jumlah)
    {
        $inv             = "INV" . time();
        $this->invoiceid = $this->model->execute_kw(
            $this->db,
            $this->uid,
            $this->pass,
            'sale.order',
            'create',
            array(
                array(
                    'display_name' => $inv,
                    'partner_id'   => $id_partner,
                    'name'         => $inv,
                ),
            )
        );
        $orderlineid = $this->model->execute_kw(
            $this->db,
            $this->uid,
            $this->pass,
            'sale.order.line',
            'create',
            array(
                array(
                    'order_id'        => $this->invoiceid,
                    'product_uom_qty' => $jumlah,
                    'product_id'      => $id_produk,
                ),
            )
        );
        return $inv;
    }
public function lihatpesanan()
    {
        $res = $this->model->execute_kw(
                $this->db, $this->uid, $this->pass, 'sale.order', 'search_read', array(
            array(
            
            ),
                ), array('limit'=>1
                )
        );
        return $res;
    }

public function lihatstatus($name)
    {
         $res = $this->model->execute_kw(
                $this->db, $this->uid, $this->pass, 'sale.order.line', 'search_read', array(
            array(
                array('name', '=', $name),
            ),
                ), array(
            
                )
        );
        return $res;
    }
	public function cekstate($state)
    {
         $res = $this->model->execute_kw(
                $this->db, $this->uid, $this->pass, 'sale.order', 'search_read', array(
            array(
                array('name', '=', $state),
            ),
                ), array(
            'fields' => array(
				'state',
              
            ),
                )
        );
        return $res;
    }
	public function cekdata()
    {
         $res = $this->model->execute_kw(
                $this->db, $this->uid, $this->pass, 'temp_datapending', 'search', array(
            array(
                
            ),
                ), array(
            
                )
        );
        return $res;
    }
	 public function tambahproduk($namaproduk,$jumlah) {
        $this->model->execute_kw(
                $this->db, $this->uid, $this->pass, 'product.product', 'create', array(
            array(
                'display_name' => $namaproduk,
                'name' => $namaproduk,
				'qty_available' => $jumlah,
            ),
                )
        );
    }
}
