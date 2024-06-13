<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class IpCalculator extends BaseController
{
    public function index()
    {
        return view('enter_name');
    }

    public function mainPage()
    {
        $data['name'] = $this->request->getPost('name');
        return view('main_page', $data);
    }

    public function inputNetworks()
    {
        $data['number_of_networks'] = $this->request->getPost('number_of_networks');
        $data['ip'] = $this->request->getPost('ip'); // Simpan IP address dalam variabel data
        return view('input_networks', $data);
    }

    public function calculate()
    {
        $ip = $this->request->getPost('ip');
        $hosts = $this->request->getPost('hosts');
        $results = $this->calculateVLSM($ip, $hosts);
        $data['results'] = $results;
        return view('result', $data);
    }

    private function calculateVLSM($ip, $hosts)
    {
        // Mengurutkan jumlah host yang dibutuhkan dari besar ke kecil
        rsort($hosts);

        $networks = [];
        $current_ip = ip2long($ip);

        foreach ($hosts as $host) {
            $prefix = 32 - (int)ceil(log($host + 2, 2));
            $wildcard = long2ip(pow(2, (32 - $prefix)) - 1);
            $network_ip = long2ip($current_ip);
            $first_host = long2ip($current_ip + 1);
            $last_host = long2ip($current_ip + pow(2, (32 - $prefix)) - 2);
            $broadcast_ip = long2ip($current_ip + pow(2, (32 - $prefix)) - 1);
            $available_hosts = pow(2, (32 - $prefix)) - 2;

            $networks[] = [
                'prefix' => $prefix,
                'available_hosts' => $available_hosts,
                'network_ip' => $network_ip,
                'first_host' => $first_host,
                'last_host' => $last_host,
                'broadcast_ip' => $broadcast_ip,
                'wildcard' => $wildcard,
            ];

            $current_ip += pow(2, (32 - $prefix));
        }

        return $networks;
    }
}
