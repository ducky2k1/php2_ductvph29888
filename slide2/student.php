<?php
    class Student {
        //properties (thuộc tính)
        public $name = "Trịnh Việt Đức";
        public $mssv = "PH29888";
        private $stk;

        //phương thức getName : nếu ko có public ở phía trước thì chương trình coi là public
        /**
         * @param string $name
         * @param string $mssv
         * @param string $stk
         */
        //khởi taho giá trị ban đầu cho các biến của class
        public function __construct($name, $mssv, $stk){
            $this->name = $name;
            $this->mssv = $mssv;
            $this->stk = $stk;
        }

        public function __destruct()
        {
            // TODO : Implement __destruct() method.
            // GC
        }


        function getName(){
            return $this->name;
        }
        // function getMsvv(){
        //     return $this->mssv;
        // }
    }
?>