<?php

use Illuminate\Database\Seeder;

class ConsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $consultation = new \App\Consultation([
            'c_name' => 'Check Up',
            'c_desc' => 'At Health Life is Possible, we offer health check-ups that are tailored to your age, gender, and specific conditions that require medical follow-ups. This can be your starting point to a healthier well-being.
                        <br><br>
                        Health Life is Possible can provide you with an assessment of your medical history and your lifestyle habits. We will carry out an extensive physical exam that includes any necessary laboratory tests.
                        <br><br>
                        We will contact you to inform you of the results, often within 48 business hours of taking samples from you.
                        <br><br>
                        We will also provide you with appropriate recommendations and you will be able to get a follow-up appointment with one of our private clinic\'s family doctors.',
            'c_price' => 300
        ]);
        $consultation->save();

        $consultation = new \App\Consultation([
            'c_name' => 'Vaccination',
            'c_desc' => 'Health life is possible private medical clinic offers all the most commonly-requested vaccinations:
                        <br><br>
                        <ol>
                        <li>Diphtheria</li>
                        <li>Tetanus</li>
                        <li>Hepatitis A</li>
                        <li>Hepatitis B</li>
                        <li>HPV</li>
                        <li>Influenza</li>
                        <li>Shingles</li> </ol>',
            'c_price' => 500
        ]);
        $consultation->save();

        $consultation = new \App\Consultation([
            'c_name' => 'Personalized Medical Care',
            'c_desc' => 'Each person is different and should have an overall health check-up that is tailored to their age and gender, and to their specific health needs. In some cases, studying the patient’s specific genetic traits may help identify the most appropriate treatment.
                        <br><br>
                        Good health involves a balanced combination of internal and external factors and requires active patient involvement. Following your check-up and the results of the various laboratory tests, we will draw up a personalized healthcare roadmap for you based on the five pillars of good health:
                        <br><br>
                        <ol>
                            <li>Health-restoring slumber (elimination of sleeping disorders)</li>
                            <li>Healthy immune system (elimination of food intolerances, intestinal hyperpermeability, endothelial dysfunction, or imbalance of the purification or elimination mechanisms)</li>
                            <li>Optimization of hormonal balance and nutritional and energy intakes (hormone therapy and supplements if required)</li>
                            <li>Musculoskeletal stimulation (personalized physical fitness program)</li>
                            <li>Development of a positive relationship with yourself and your surroundings (stress management and senses management).</li>
                        </ol>
                        <br>
                        <strong>We provide a roadmap to our clients so they can regain their physical health and enjoy a healthier lifestyle.<strong>',
            'c_price' => 400
        ]);
        $consultation->save();

        $consultation = new \App\Consultation([
            'c_name' => 'Blood Test',
            'c_desc' => 'Health Life is Possible offers you: <br>

            <ul>
            <li>A wide range of blood and urinary testing, including some for genetic profiling; </li>
            <li>Processing of laboratory tests prescribed by other clinics or physicians. In the event of significant anomalies, our nursing staff will ensure that your doctor is informed or that you are promptly referred for the appropriate treatment for your condition;</li>
            <li>Receipt and archiving of your results in a digital format to facilitate optimal follow-up for each patient;</li>
            <li>Most results ready for collection in less than 48 hours.</li>
            </ul>
            <br><br>
            <strong>Please note that our rates are extremely competitive and are reimbursable by most collective insurance plans as well as being tax-deductible.</strong>',
            'c_price' => 300
        ]);
        $consultation->save();

        $consultation = new \App\Consultation([
            'c_name' => 'Menopause',
            'c_desc' => 'When menopause begins, estrogen levels drop which often leads to hot flashes.  Doctors refer to this as a vasomotor symptom which is believed to be caused by hormonal fluctuations. The recurrence of these symptoms generally last between two and five years but in some cases can even last decades. The following are also common symptoms of menopause:

                        <br><br>
                        <ul>
                            <li>Night sweats</li>
                            <li>Nausea</li>
                            <li>Dizzy spells</li>
                            <li>Palpitations</li>
                            <li>Vaginal dryness</li>
                            <li>Reduced sex drive</li>
                            <li>Genital or urinary disturbances</li>
                        </ul>
                        <br><br>
                        Sex hormones regulate the high metabolism levels necessary for reproduction. Their decrease leads to a sudden lowering of the metabolism and acceleration of the aging process. This results in a higher risk of osteoporosis and disabilities.',
            'c_price' => 300
        ]);
        $consultation->save();
    }
}
