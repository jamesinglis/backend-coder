<?php

class Maksimer_Backend_Coder    {
    public function __construct($wmc) { // $wmc => Wannabe Maksimer Backend Coder
        
        if( !$wmc->looking_for_a_challinging_job() )    {
            throw new Exception('Try google, facebook or microsoft.', 'Looking_For_Somehting_Else_Big_And_Safe_Exception');
        }
        
        if( !$wmc->knows_php_to_fingertips() )  {
            if( $wmc->really_eager_to_learn() && $wmc->has_junior_potential() ) {
                throw new Exception('Send an email to the boss: nils-fredrik@maksimer.no with a few lines and exception code', 'Not_Qualified_But_Might_Be_A_Quick_Learning_Talent');
            }
            throw new Exception('Sorry. Try something else. Dont waste your/our time.', 'Not_Qualified');
        }
        
        if( !$wmc->can_wear_a_lumberjack_shirt_every_friday() ) {
            throw new Exception('Sorry. Company policy. Try some wannabe hipster agency where you can wear square glasses and bow tie.', 'Social_Lumberjack');
            // Perhaps we should show some pictures from our latest julebord in Fleischer / Voss? 
        }

        if( !$wmc->will_code_for_food() ) {
            throw new Exception('Our lunch is actually (almost…) free and everyone loves a good burger!.', 'Code_For_Food');
        }
        
        if( !$wmc->will_work_hard_when_required() || !$wmc->sees_producing_great_code_as_a_reward() )    {
            throw new Exception('Sorry. If champagne is your reward, try a creative design agency.', 'Social_Hardworking');
        }
        
        if( !$wmc->has_good_coffee_brewing_morality() ) {
            throw new Exception('Sorry. If you take the last cup, make a new brew.', 'Social_Coffeebrewing');
        }
        
        if( !$wmc->know_what_wordpress_is() )   {
            throw new Exception('Google is your friend.', 'Not_Qualified');
        }
        
        if( !$wmc->know_what_a_wordpress_hook_is() )   {
            throw new Exception('Sorry .', 'Not_Qualified');
        }
        
        if( !$wmc->wants_to_work_in_bergen_or_stavanger() )   {
            throw new Exception('Sorry, we need you in one of our offices quite often.', 'Not_Qualified');
        }

        $wmc->email_cv_and_short_summary('nils-fredrik@maksimer.no', 'Backend developer', 'Hi, attached you find my cv. Here you get 3 reasons you should hire me for your awesome PHP, WordPress / WooCommerce position: ');
        
    }
}


interface Wannabe_Maksimer_Backend_Coder
{

    public function looking_for_a_challinging_job();

    public function knows_php_to_fingertips();

    public function really_eager_to_learn();

    public function has_junior_potential();

    public function can_wear_a_lumberjack_shirt_every_friday();

    public function will_code_for_food();

    public function will_work_hard_when_required();

    public function sees_producing_great_code_as_a_reward();

    public function has_good_coffee_brewing_morality();

    public function know_what_wordpress_is();

    public function know_what_a_wordpress_hook_is();

    public function wants_to_work_in_bergen_or_stavanger();

    public function email_cv_and_short_summary($email_address, $subject, $body);
}

class James_Inglis_Backend_Coder implements Wannabe_Maksimer_Backend_Coder
{

    protected $caffeinated = false;

    protected $full_name = 'James Inglis';

    public function __construct(array $inputs)
    {
        if (in_array('coffee', $inputs)) {
            $this->caffeinated = true;
        }
    }

    public function get_full_name()
    {
        return $this->full_name;
    }

    public function looking_for_a_challinging_job()
    {
        return false; // Already have a great one with @WebcodeAS!
    }

    public function knows_php_to_fingertips()
    {
        return true; // A bit more advanced than a script kiddie
    }

    public function really_eager_to_learn()
    {
        return true; // Any developer who isn't will be obsolete in 2 years!
    }

    public function has_junior_potential()
    {
        return true; // I'd hope so... Senior potential too ;)
    }

    public function can_wear_a_lumberjack_shirt_every_friday()
    {
        return true; // Can, yes; look good, that's a different story
    }

    public function will_code_for_food()
    {
        return true; // Yep. Salary is good too!
    }

    public function will_work_hard_when_required()
    {
        if (!$this->caffeinated) {
            return false;
        }
        return true; // Can I automate it? :)
    }

    public function sees_producing_great_code_as_a_reward()
    {
        return true; // Code smells, be gone!
    }

    public function has_good_coffee_brewing_morality()
    {
        return true; // Coffee is my life - who would I be to deprive the next person of that?
    }

    public function know_what_wordpress_is()
    {
        return true; // It's a blog, right?
    }

    public function know_what_a_wordpress_hook_is()
    {
        return true; // I use them hourly...
    }

    public function wants_to_work_in_bergen_or_stavanger()
    {
        return false; // Sorry, Sørlandet all the way!
    }

    public function email_cv_and_short_summary($email_address, $subject, $body)
    {
        mail($email_address, $subject, $body, 'From: hello@jamesinglis.no');
    }
}

try {
    $applicant = new James_Inglis_Backend_Coder(array('coffee'));
    $position = new Maksimer_Backend_Coder($applicant);
} catch (Exception $e) {
    echo sprintf('Applicant %s is not suitable for this position but loves your job advertisement!', $applicant->get_full_name());
}
