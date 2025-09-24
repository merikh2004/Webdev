<?php
require('../../fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();

// ===== HEADER =====
$pdf->SetFont('Arial','B',20);
$pdf->Cell(0,10,utf8_decode('Joshua Paul Colmo'),0,1,'C');

$pdf->SetFont('Arial','I',12);
$pdf->Cell(0,10,utf8_decode('Computer Science Student | Aspiring Software Engineer'),0,1,'C');
$pdf->Ln(5);

$pdf->SetFont('Arial','',11);
$pdf->Cell(0,6,utf8_decode('0906-355-9010 | joshuapaulmedina@gmail.com | github.com/merikh2004 | linkedin.com/in/joshuacolmo'),0,1,'C');
$pdf->Ln(10);

// ===== SUMMARY =====
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,8,utf8_decode('Summary'),0,1);

$pdf->SetFont('Arial','',11);
$pdf->MultiCell(0,6,utf8_decode(
    "Passionate Computer Science student with a strong foundation in software development and web technologies. ".
    "Proficient in multiple programming languages and frameworks, with hands-on experience in building applications ".
    "and collaborating using Git/GitHub. Seeking opportunities to grow as a Software Engineer and contribute to impactful projects."
));
$pdf->Ln(8);

// ===== WORK EXPERIENCE =====
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,8,utf8_decode('Work Experience'),0,1);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(0,6,utf8_decode('SPES-2024'),0,1);
$pdf->SetFont('Arial','',11);
$pdf->MultiCell(0,6,utf8_decode(
    "Assisted at the local Health Center during the SPES 2024 program, performing clerical tasks, supporting staff ".
    "in daily operations, and engaging with community members. Gained valuable experience in teamwork, responsibility, ".
    "and effective communication."
));
$pdf->Ln(3);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(0,6,utf8_decode('SPES-2025'),0,1);
$pdf->SetFont('Arial','',11);
$pdf->MultiCell(0,6,utf8_decode(
    "Assisted at the Management Information Systems (MIS) Office of the University of Caloocan City during the SPES ".
    "2025 program. Provided support in data management, clerical work, and technical tasks related to information systems. ".
    "Developed skills in organization, attention to detail, and collaboration within an academic office setting."
));
$pdf->Ln(8);

// ===== SKILLS =====
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,8,utf8_decode('Skills'),0,1);

$pdf->SetFont('Arial','',11);
$pdf->MultiCell(0,6,utf8_decode(
    "Programming Languages: C/C++, Java, PHP, JavaScript, HTML, CSS\n".
    "Frameworks & Libraries: Bootstrap, Tailwind CSS, Node.js\n".
    "Tools & Platforms: Git, GitHub, Figma, Photoshop, Canva, MS Word, MS Excel\n".
    "Other Skills: UI/UX basics, Responsive Web Design"
));
$pdf->Ln(8);

// ===== EDUCATION =====
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,8,utf8_decode('Education'),0,1);

$pdf->SetFont('Arial','',11);
$pdf->MultiCell(0,6,utf8_decode(
    "Bachelor of Science in Computer Science\nUniversity of Caloocan, August 2023-Present\n\n".
    "Tech-Voc, SPCC (With Honor, Best in Research Thesis)\nJuly 2021-August 2023"
));
$pdf->Ln(8);

// ===== HOBBIES =====
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,8,utf8_decode('Hobbies'),0,1);

$pdf->SetFont('Arial','',11);
$pdf->MultiCell(0,6,utf8_decode("Running, Cycling, Cooking, Bodybuilding"));

$pdf->Output();
?>
