<?php 
    //model
    include_once (dirname(__DIR__,1) . '/classes/product_class.php');

    function brand_add($brand) {
        //model class instance
        $product_brand = new Brand_class();

        //run insert model method
        $run_brand = $product_brand->insert_brand($brand);

        if ($run_brand) {
            return true;
        }
        else{
            return false;
        }
    }

    function brand_select() {
        //model class instance
        $brandview = new Brand_class();

        //run select phone model method
        $run_brand = $brandview->select_brand();
        //create array
        // print_r($run_brand);
        return $run_brand;
       
    }

    function delete_brand($brandid) {
        //model class instance
        $branddel = new Brand_class();

        //run select phone model method
        $run_delete = $branddel->brand_delete($brandid);
       
        return $run_delete;
    }

    function update_brand($brandname, $brandid) {
        //model class instance 
        $brupdate = new Brand_class();

        //run select phone model method
        $run_update = $brupdate->brand_update($brandname, $brandid);
        if ($run_update) {
            return true;
        }
        else {
            return false;
        }
    }

// End of Brand class
    
    // Category controllers

    function cat_insert($catname) {
        //model class instance
        $product_cat = new Category_class();

        //run insert phone model method
        $run_cat = $product_cat->insert_cat($catname);

        if ($run_cat) {
            return true;
        }
        else{
            return false;
        }
    }

    function cat_select() {
        //model class instance
        $catview = new Category_class();

        //run select phone model method
        $run_cat = $catview->select_cat();
        return $run_cat;
      
    }
    
    function cat_delete($catid) {
        //model class instance
        $catdel = new Category_class();

        //run select phone model method
        $run_delete = $catdel->delete_cat($catid);
        if ($run_delete) {
            
            return true;
        }
        else{
            return false;
        }
    }

    function cat_update($catname, $catid) {
        //model class instance 
        $catupdate = new Category_class();

        //run select phone model method
        $run_update = $catupdate->update_cat($catname, $catid);
        if ($run_update) {
            return true;
        }
        else {
            return false;
        }
    }

    // End of Category function




    // Product controllers

    function prod_insert($productcat, $productbrand, $product_title, $productprice, $productdesc, $productimage,$product_keywords){
        //model class instance
        $product = new Product_class();

        //run insert phone model method
        $run_prod = $product->insert_product($productcat, $productbrand, $product_title, $productprice, $productdesc, $productimage,$product_keywords);

        if ($run_prod) {
            return true;
        }
        else{
            return false;
        }
    }


    function prod_select() {
        //model class instance
        $catview = new Product_class();

        //run select phone model method
        $run_cat = $catview->select_product();
        return $run_cat;
      
    }

    function prod_select_ran() {
        //model class instance
        $catview = new Product_class();

        //run select phone model method
        $run_cat = $catview->select_product_ran();
        return $run_cat;
      
    }

    function prod_del($productid){
        //model class instance
        $catview = new Product_class();

        //run select phone model method
        $run_cat = $catview->delete_product($productid);
        return $run_cat;
      
    }

    function prod_update($productcat, $productbrand, $productprice, $product_title, $productkeywords, $productdesc, $productimage, $productid){
        //model class instance
        $catview = new Product_class();

        //run select phone model method
        $run_cat = $catview->update_product($productcat, $productbrand, $productprice, $product_title, $productkeywords, $productdesc, $productimage, $productid);
        return $run_cat;
      

    }

    function Oneprod($prodcutid){
        //model class instance
        $prod = new Product_class();

        //run select phone model method
        $run = $prod->selectOne($prodcutid);
        return $run;
      
    }

    function search_productctr( $search_query){
        //model class instance
        $prod = new Product_class();

        //run select phone model method
        $run = $prod->search_product( $search_query);
        return $run;
      
    }

    function selectProdran(){
        $prod= new Product_class();

        $run = $prod->select_product_ran();
        return $run;
    }

    function selectProdcat($cat_id){
        $prod= new Product_class();

        $run = $prod->select_product_cat($cat_id);
        return $run;
    }

    function selectProdbrand($brandid){
        $prod= new Product_class();

        $run = $prod->select_product_brand($brandid);
        return $run;
    }
    

    function countCartctr($catid){
        $prod= new Product_class();

        $run = $prod->countCart($catid);
        return $run;
    }

    function countBrandctr($brandid){
        $prod= new Product_class();

        $run = $prod->countBrand($brandid);
        return $run;
    }

// End of Product controllers


?>


