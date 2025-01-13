<?php

namespace App\Controllers;

class GejalaController extends BaseController
{
    public function hasilSolusi()
    {
        // Data kasus lama
        $kasus = [
            "Burung terkena snot" => ["G03", "G05", "G06", "G09"],
            "Burung sedang mabung / ganti bulu" => ["G02", "G03", "G06"],
            "Burung stress" => ["G01", "G03", "G10", "G11"],
            "Burung cacingan" => ["G03", "G05", "G06"],
            "Burung terkena kutu atau jamur" => ["G02", "G04"],
            "Burung tidak memiliki mental" => ["G03", "G10", "G11"],
            "Burung obesitas" => ["G03", "G06", "G08", "G12"],
            "Burung over birahi" => ["G07", "G13"]
        ];

        // Solusi untuk setiap kasus
        $solusi = [
            "Burung terkena snot" => "Jaga kebersihan kandang dan pakan, berikan obat tetes mata",
            "Burung sedang mabung / ganti bulu" => "Istirahatkan burung dan beri pakan yang berkualitas",
            "Burung stress" => "Tempatkan burung di lokasi yang tenang dan batasi interaksi dengan burung",
            "Burung cacingan" => "Beri obat cacing dan vitamin untuk burung, berikan pakan yang berkualitas dan jaga kebersihan",
            "Burung terkena kutu atau jamur" => "Rajin memandikan burung dan jaga kebersihan sangkar",
            "Burung tidak memiliki mental" => "Tempatkan burung di keramaian dan lakukan pemasteran",
            "Burung obesitas" => "Sering jemur burung dan lakukan pengumbaran di sangkar umbar",
            "Burung over birahi" => "Lakukan terapi mandi malam dan kurangi ekstra fooding",
        ];

        // Bobot gejala
        $bobotGejala = [
            "G01" => 5, "G02" => 3, "G03" => 3, "G04" => 1, "G05" => 3,
            "G06" => 5, "G07" => 1, "G08" => 3, "G09" => 3, "G10" => 3,
            "G11" => 3, "G12" => 3, "G13" => 3,
        ];

        // Gejala dari pengguna
        $kasusBaru = $this->request->getPost();

        // Fungsi menghitung kemiripan
        function calculateSimilarity($kasusBaru, $kasusLama, $bobotGejala)
        {
            $kemiripan = 0;
            $totalBobot = array_reduce($kasusLama, fn($sum, $g) => $sum + ($bobotGejala[$g] ?? 0), 0);

            foreach ($kasusBaru as $gejala) {
                if (in_array($gejala, $kasusLama)) {
                    $kemiripan += $bobotGejala[$gejala] ?? 0;
                }
            }

            return $totalBobot > 0 ? $kemiripan / $totalBobot : 0;
        }

        // Hitung kemiripan
        $hasilKemiripan = [];
        foreach ($kasus as $key => $gejala) {
            $similarity = calculateSimilarity(array_keys($kasusBaru), $gejala, $bobotGejala);
            $hasilKemiripan[] = [
                'kasus' => $key,
                'similarity' => $similarity
            ];
        }

        // Urutkan hasil kemiripan
        usort($hasilKemiripan, fn($a, $b) => $b['similarity'] <=> $a['similarity']);

        // Ambil hasil tertinggi
        $topResults = array_slice($hasilKemiripan, 0, 2);
        $topCase = $topResults[0]['kasus'];

        return view('coba', [
            'hasil' => $topResults,
            'solusi' => $solusi[$topCase],
            'inputPengguna' => $kasusBaru, // Tambahkan input pengguna
        ]);
    }
}
