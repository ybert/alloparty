<?php

namespace Alloparty\PartyBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;

class PartyController extends FOSRestController
{

    public function getPartyAction($id)
    {
        $this->getDoctrine()->getManager()->getRepository('Party')->find($id);
    }
}
