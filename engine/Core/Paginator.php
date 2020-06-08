<?php


class Paginator {

        private $_connection;
        private $_limit;
        private $_page;
        private $_query;
        private $_total;



        public function __construct( $conn, $query ) {

            $this->_connection = $conn;
            $this->_query = $query;

            if(!(strpos($this->_query, 'INSERT' ) !== false || strpos($this->_query, 'UPDATE') !== false || strpos($this->_query, 'DELETE') !== false)){
              $rs= $this->_connection->query( $this->_query );
              if ($rs) {
                $this->_total = $rs->num_rows;
              }else{
                $this->_total = 0;
              }
            }
        }
        public function getTotal()
        {
          return $this->_total;
        }
        public function getData( $limit = 10, $page = 1 ) {

            $this->_limit   = $limit;
            $this->_page    = $page;

            if(strpos($this->_query, 'INSERT' ) !== false || strpos($this->_query, 'UPDATE') !== false || strpos($this->_query, 'DELETE') !== false){
              return ;
            }

            if ( $this->_limit == 'all' || $this->_limit == 'one') {
                $query      = $this->_query;
            } else {
                $query      = $this->_query . " LIMIT " . ( ( $this->_page - 1 ) * $this->_limit ) . ", $this->_limit";
            }
            $rs             = $this->_connection->query( $query );
            if(!$rs){
              return $rs;
            }
            while ( $row = $rs->fetch_assoc() ) {
                $results[]  = $row;
            }

            // $result         = new stdClass();
            // $result->page   = $this->_page;
            // $result->limit  = $this->_limit;
            // $result->total  = $this->_total;
            // $result->data   = $results;
            // var_dump($results);
            if (!isset($results)) {
              return false;
            }
            return $results;
        }

        public function setData() {
            $query = $this->_query;
            $result = $this->_connection->query( $query );

            return $result;
        }

        public function execute() {
            $query = $this->_query;
            $result = $this->_connection->query( $query );

            return $result;
        }

        public $paginatorClass = 'pagination';
        public $paginatorItem = 'page-item';
        public $paginatorLink = 'page-link';

        public function createLinks( $links, $list_class = null) {
          if (empty($list_class)) {
            $list_class = $this->paginatorClass;
          }
            if ( $this->_limit == 'all' ) {
                return '';
            }
            if ($this->_limit != 0) {
              $last       = ceil( $this->_total / $this->_limit );
            }else{
              $last       = ceil( $this->_total / 1 );
            }

            $start      = ( ( $this->_page - $links ) > 0 ) ? $this->_page - $links : 1;
            $end        = ( ( $this->_page + $links ) < $last ) ? $this->_page + $links : $last;

            $html       = '<ul class="' . $list_class . '">';

            $class      = ( $this->_page == 1 ) ? "disabled ".$this->paginatorItem : "".$this->paginatorItem;
            $html       .= '<li class="' . $class . '"><a href="?limit=' . $this->_limit . '&page=' . ( $this->_page - 1 ) . '" class="'.$this->paginatorLink.'"><i class="fa fa-angle-left lnr lnr-chevron-left"></i></a></li>';

            if ( $start > 1 ) {
                $html   .= '<li><a href="?limit=' . $this->_limit . '&page=1" class="'.$this->paginatorLink.'">1</a></li>';
                $html   .= '<li class="disabled"><span class="'.$this->paginatorLink.'">...</span></li>';
            }

            for ( $i = $start ; $i <= $end; $i++ ) {
                $class  = ( $this->_page == $i ) ? "active ".$this->paginatorItem : "".$this->paginatorItem;
                $html   .= '<li class="' . $class . '"><a href="?limit=' . $this->_limit . '&page=' . $i . '" class="'.$this->paginatorLink.'">' . $i . '</a></li>';
            }

            if ( $end < $last ) {
                $html   .= '<li class="disabled"><span class="'.$this->paginatorLink.'">...</span></li>';
                $html   .= '<li><a href="?limit=' . $this->_limit . '&page=' . $last . '" class="'.$this->paginatorLink.'">' . $last . '</a></li>';
            }

            $class      = ( $this->_page == $last ) ? "disabled ".$this->paginatorItem : "".$this->paginatorItem;
            $html       .= '<li class="' . $class . '"><a href="?limit=' . $this->_limit . '&page=' . ( $this->_page + 1 ) . '" class="'.$this->paginatorLink.'"><i class="fa fa-angle-right lnr lnr-chevron-right"></i></a></li>';

            $html       .= '</ul>';

            return $html;
        }

        public function getInsertedId()
        {
          return $this->_connection->insert_id;
        }

}
