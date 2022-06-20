<?php

namespace Data\one {
    class Conflict
    {
        public function conflict1()
        {
            return "Conflict dari class Conflict1" . PHP_EOL;
        }
    }

    class Sample
    {
        public function sample()
        {
            return "Sample dari class Sample" . PHP_EOL;
        }
    }

    class Dummy
    {
        public function dummy()
        {
            return "Dummy dari class Dummy" . PHP_EOL;
        }
    }
}

namespace Data\two {
    class Conflict
    {
        public function conflict2()
        {
            return "Conflict dari class Conflict2" . PHP_EOL;
        }
    }
}
