    <?php
    class Connection
    {

        public const servername = 'localhost';
        public const database = 'koli';
        public const username = 'root';
        public const password = '';

        protected \PDO $connection;

        public function __construct()
        {
            $this->connection = new \PDO('mysql:host=' . self::servername . ';dbname=' . self::database, self::username, self::password);
        }

        public function getServername(){
            return self::servername;
        }

        public function getDatabase(){
            return self::database;
        }

        public function getUsername(){
            return self::username;
        }

        public function getPassword(){
            return self::password;
        }
    }

    ?>