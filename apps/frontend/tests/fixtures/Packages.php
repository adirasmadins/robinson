<?php
namespace Phalcon\Test\Fixtures;
// @codingStandardsIgnoreStart
class Packages
{
    public static function get($records = null)
    {
        // packageId, package, description, price, pdf, status, createdAt, updatedAt, destinationId, type
        $template = "(%d, '%s', '%s', %d, '%s', %d, '%s', '%s', %d)";
        
        for ($i = 1; $i <= 5; $i++)
        {
            $data[] = "($i, 'package{$i}', 'description{$i}', 999, 'pdffile-1.pdf', 1, '2014-01-17 1{$i}:00:00', '2014-01-17 1{$i}:00:00', 1, 0)";
        }
        
        return $data;
    }
}