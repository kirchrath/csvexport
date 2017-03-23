<?php

namespace AppBundle;


class CsvFormatter
{
    public static function formatCustomerSales($customerSaleData) {
        return array_map(function ($item) {
            $latest = new \DateTime($item['latest']);
            return [
                'id' => $item['customer_id'],
                'name' => self::getNameFromSaleItem($item),
                'count' => $item['length'],
                'amount' => $item['total'],
                'latest' => $latest->format('d.m.Y')
            ];
        }, $customerSaleData);
    }

    private static function getNameFromSaleItem($item) {
        $salutation = '';
        switch ($item['gender']) {
            case 'female':
                $salutation = 'Frau ';
                break;
            case 'male':
                $salutation = 'Herr ';
                break;
        }

        return $salutation . $item['firstname'] . ' ' . $item['lastname'];
    }
}