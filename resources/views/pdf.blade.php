<!DOCTYPE html>
<html>

<head>
    <title>Compte Rendu Médical</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            width: 80%;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .content {
            margin-bottom: 20px;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
        }

        h1 {

            font-size: 24px;
            margin: 0;
        }

        h2 {

            font-size: 18px;
            margin: 0;
            margin-bottom: 10px;
        }

        p {

            font-size: 14px;
            margin: 0;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Compte Rendu Médical</h1>
        </div>
        <div class="content">
            <h2>Motif:</h2>
            <p>{{ $rapport->RAP_MOTIF }}</p>

            <h2>Date:</h2>
            <p>{{ $rapport->RAP_DATE }}</p>

            <h2>Bilan:</h2>
            <p>{{ $rapport->RAP_BILAN }}</p>

            <h2>Médicament:</h2>
            <p>{{ $rapport->medicament ? $rapport->medicament->MED_NOMCOMMERCIAL : 'N/A' }}</p>

            <h2>Praticien:</h2>
            <p>{{ $rapport->praticien ? $rapport->praticien->PRA_NOM : 'N/A' }} {{ $rapport->praticien ? $rapport->praticien->PRA_PRENOM : 'N/A' }}</p>
        </div>
    </div>
</body>

</html>