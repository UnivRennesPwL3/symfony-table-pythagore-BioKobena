<?php

namespace App\Utility;

class PythagoreUtility
{
    // Méthode qui génère le code HTML d'un tableau de Pythagore
    public function display(): string
    {
        $html = '<table border="1" style="border-collapse: collapse; width: 100%;">';

        // Première ligne des en-têtes (0 à 10)
        $html .= '<tr><th></th>';
        for ($i = 1; $i <= 10; $i++) {
            $html .= "<th>$i</th>";
        }
        $html .= '</tr>';

        // Génération des lignes de la table
        for ($i = 1; $i <= 10; $i++) {
            $html .= "<tr><th>$i</th>"; // Colonne des en-têtes
            for ($j = 1; $j <= 10; $j++) {
                if ($i == $j) {
                    $html .= '<td style="text-align: center;">X</td>';
                } else {
                    $html .= '<td style="text-align: center;">' . ($i * $j) . '</td>';
                }
            }
            $html .= '</tr>';
        }

        $html .= '</table>';

        return $html;
    }
}
