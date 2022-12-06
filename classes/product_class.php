<?php
    //database credentials
  //  include('C:/XAMPP/htdocs/template/settings/db_class.php');

    include_once (dirname(__DIR__,1) . '/settings/db_class.php');
    
    class Brand_class extends db_connection {

        //Insert method
        public function insert_brand($brandname) {

            //formulate insert query
            $sql = "INSERT INTO brands(brand_name) VALUES('$brandname')";

            //execute query
            return $this->db_query($sql);
        }

        //Select method
        public function select_brand() {

            //formulate select query
            $sql = "SELECT * FROM brands";
            //$result = $this->db_fetch($sql);

            //execute query
            return $this->db_fetch_all($sql);;
        }

        public function selectOneBrand($brand_id){
            $sql = "SELECT brand_name FROM brands WHERE brand_id = '$brand_id'";
            return $this->db_fetch_one($sql);
        }

        public function selectBrand($brandid){
            $sql = "SELECT * FROM brands WHERE brand_id = '$brandid'";
            return $this->db_fetch_all($sql);
        }

        //Delete model
        public function brand_delete($brandid) {

            //formulate delete query
            $sql = "DELETE FROM brands WHERE brand_id='$brandid'";

            //execute query
            return $this->db_query($sql);
        }

        //Update model
        public function brand_update($brandname, $brandid) {

            //formulate update query
            $sql = "UPDATE brands SET brand_name = '$brandname' WHERE brand_id = '$brandid'";

            //execute query
            return $this->db_query($sql);
        }

    }

    

    // Category Class

    class Category_class extends db_connection {

        //Insert method
        public function insert_cat($catname) {

            //formulate insert query
            $sql = "INSERT INTO categories(cat_name) VALUES('$catname')";

            //execute query
            return $this->db_query($sql);
        }

        //Select method
        public function select_cat()  {

            //formulate select query
            $sql = "SELECT * FROM categories";
            //$result = $this->db_fetch($sql);

            //execute query
            return $this->db_fetch_all($sql);;
        }

        public function selectCat($catid){
            $sql = "SELECT * FROM categories WHERE cat_id = '$catid'";
            return $this->db_fetch_all($sql);
        }

        public function selectOneCat($catid){
            $sql = "SELECT cat_name FROM categories WHERE cat_id = '$catid'";
            return $this->db_fetch_one($sql);
        }

        //Delete model
        public function delete_cat($catid) {

            //formulate delete query
            $sql = "DELETE FROM categories WHERE cat_id='$catid'";

            //execute query
            return $this->db_query($sql);
        }

        //Update model
        public function update_cat($catname, $catid) {

            //formulate update query
            $sql = "UPDATE categories SET cat_name = '$catname' WHERE cat_id = '$catid'";

            //execute query
            return $this->db_query($sql);
        }

    }
    
    // End of Category class




    // Product Class
    class Product_class extends db_connection{

        //Insert method
        public function insert_product($productcat, $productbrand, $product_title, $productprice, $productdesc, $productimage,$product_keywords) {

            //formulate insert query
            $sql = "INSERT INTO products(product_cat, product_brand, product_title, product_price, product_desc, product_image, product_keywords) VALUES('$productcat', '$productbrand','$product_title', '$productprice', '$productdesc', '$productimage', '$product_keywords')";

            //execute query
            return $this->db_query($sql);
        }

        //Select method
        public function select_product()  {

            //formulate select query
            $sql = "SELECT * FROM products";
            //$result = $this->db_fetch($sql);

            //execute query
            return $this->db_fetch_all($sql);;
        }

        public function select_product_ran()  {

            //formulate select query
            $sql = "SELECT * FROM products ORDER BY rand() limit 0,3 ";
            //$result = $this->db_fetch($sql);

            //execute query
            return $this->db_fetch_all($sql);;
        }

        //Delete model
        public function delete_product($productid) {

            //formulate delete query
            $sql = "DELETE  FROM products WHERE product_id='$productid'";

            //execute query
            return $this->db_query($sql);
        }

        //Update model
        public function update_product($productcat, $productbrand, $productprice, $product_title, $productkeywords, $productdesc, $productimage, $productid) {

            //formulate update query
            $sql = "UPDATE products SET  product_cat = '$productcat', product_brand = '$productbrand', product_price = '$productprice', product_title='$product_title', product_keywords='$productkeywords' ,product_desc = '$productdesc', product_image = '$productimage' WHERE product_id = '$productid'";

            //execute query
            return $this->db_query($sql);
        }


        public function selectOne($productid){
            $sql = "SELECT * FROM products WHERE product_id = '$productid'";
            return $this->db_fetch_one($sql);
        }
       

        

        public function search_product($search_query){
                $sql = "SELECT * FROM products WHERE product_keywords LIKE '%$search_query%'";
                return $this->db_fetch_all($sql);
            }
        
    

        public function select_product_cat($cat_id){
            $sql = "SELECT * FROM products WHERE product_cat = '$cat_id'";
            return $this->db_fetch_all($sql);
        }

        public function select_product_brand($brand_id){
            $sql = "SELECT * FROM products WHERE product_brand = '$brand_id'";
            return $this->db_fetch_all($sql);
        }


        public function countCarte($catid){
            $filter= "SELECT COUNT(*) FROM products WHERE product_cat = '$catid'";
            return $this->db_fetch_one($filter)['COUNT(*)'];
        }

        public function countBrand($brandid){
            $filter= "SELECT COUNT(*) FROM products WHERE product_brand = '$brandid'";
            return $this->db_fetch_one($filter)['COUNT(*)'];
        }
    
    }
    


// End Product Class
    
?>