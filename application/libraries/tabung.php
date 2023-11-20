<?php
class tabung
{
    function volume($jari, $tinggi)
    {
        $phi = 3.14;
        echo "phi :" . $phi;
        echo "<br/>";
        echo "jari-jari :" . $jari;
        echo "<br/>";
        echo "tinggi :" . $tinggi;
        echo "<br/>";
        $volume = $phi * $jari * $jari * $tinggi;
        echo "volume tabung " . $volume;
        echo "<hr/>";
    }
    function luaspermukaan($jari, $tinggi)
    {
        $phi = 3.14;
        $Lpermukaan = 2 * $phi * $jari * ($jari + $tinggi);
        echo "luas permukaan tabung " . $Lpermukaan;
        echo "<hr/>";
    }
    function selimut($jari, $tinggi)
    {
        $phi = 3.14;
        $selimut = 2 * $phi * $jari * $tinggi;
        echo "luas selimut tabung " . $selimut;
        echo "<hr/>";
    }
}
?>