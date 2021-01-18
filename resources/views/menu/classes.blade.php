<!DOCTYPE html>
@extends('layouts.app')


@section('content')
<div id="container3">
    <div class="container-fluid ">
        <div class="col-12 myHeader" style="padding-bottom: 3%">
            <h1><strong>Classes</strong></h1>
        </div>
        <div class="col-12 text-center" style="padding-bottom: 3%">
            <p>From knights in shiny armor to skulking stalkers and cunning spellcasters, each class in World of Warcraft presents unique challenges and gameplay for you to master. What is your calling?
            </p>
        </div>

        <div class="row text-left padding">
            <div class="col-sm-4 col-md-4 col-lg-3 padding-bottomPictures">
                <img class="warrior" src="warrior.png " alt="">
            </div>
            <div class="col-sm-8 col-md-8 col-lg-3">
                <h2>Warrior</h2>
                <p>For as long as war has raged, heroes from every race have aimed to master the art of battle. Warriors combine strength, leadership, and a vast knowledge of arms and armor to wreak havoc in glorious combat.</p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-3 padding-bottomPictures">
                <img class="Paladin" src="paladin.png" alt="" >
            </div>
            <div class="col-sm-8 col-md-8 col-lg-3">
                <h2>Paladin</h2>
                <p>This is the call of the paladin: to protect the weak, to bring justice to the unjust, and to vanquish evil from the darkest corners of the world.</p>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-3 padding-bottomPictures">
                <img class="Hunter" src="hunter.png" alt="" >
            </div>
            <div class="col-sm-8 col-md-8 col-lg-3 ">
                <h2>Hunter</h2>
                <p>From an early age, the call of the wild draws some adventurers from the comfort of their homes into the unforgiving primal world outside. Those who endure become hunters.
                </p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-3 padding-bottomPictures">
                <img class="Rogue" src="rogue.png" alt=""  >
            </div>
            <div class="col-sm-8 col-md-8 col-lg-3">
                <h2>Rogue</h2>
                <p>For rogues, the only code is the contract, and their honor is purchased in gold. Free from the constraints of a conscience, these mercenaries rely on brutal and efficient tactics.</p>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-3 padding-bottomPictures">
                <img class="Priest" src="priest.png"  alt="" >
            </div>
            <div class="col-sm-8 col-md-8 col-lg-3 ">
                <h2>Priest</h2>
                <p>Priests are devoted to the spiritual, and express their unwavering faith by serving the people. For millennia they have left behind the confines of their temples and the comfort of their shrines so they can support their allies in war-torn lands.
                </p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-3 padding-bottomPictures">
                <img class="Shaman" src="shaman.png" alt="" >
            </div>
            <div class="col-sm-8 col-md-8 col-lg-3">
                <h2>Shaman</h2>
                <p>Shaman are the spiritual leaders of their tribes and clans. They are masters of the elements, using spells and totems that heal or enhance their allies in battle while unleashing the fury of the elements upon their foes.</p>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-3 padding-bottomClassesPictures">
                <img class="Mage" src="mage.png" alt="" >
            </div>
            <div class="col-sm-8 col-md-8 col-lg-3 ">
                <h2>Mage</h2>
                <p>Students gifted with a keen intellect and unwavering discipline may walk the path of the mage. The arcane magic available to magi is both great and dangerous, and thus is revealed only to the most devoted practitioners.
                </p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-3 padding-bottomPictures">
                <img class="Warlock" src="warlock.png" alt="" >
            </div>
            <div class="col-sm-8 col-md-8 col-lg-3">
                <h2>Warlock</h2>
                <p>In the face of demonic power, most heroes see death. Warlocks see only opportunity. Dominance is their aim, and they have found a path to it in the dark arts. These voracious spellcasters summon demonic minions to fight beside them.</p>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-3 padding-bottomPictures">
                <img class="Monk" src="monk.png" alt="" >
            </div>
            <div class="col-sm-8 col-md-8 col-lg-3 ">
                <h2>Monk</h2>
                <p>Bare-knuckle brawlers whose no-weapon styles were born in ancient Pandaria, monks are as diverse as the energy that surrounds them. They can shoulder deadly attacks through the haze of their brews, heal broken chi flows, and beat their enemies with wind-quick fists and feet.
                </p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-3 padding-bottomPictures">
                <img class="Druid" src="druid.png" alt="" >
            </div>
            <div class="col-sm-8 col-md-8 col-lg-3">
                <h2>Druid</h2>
                <p>Druids harness the vast powers of nature to preserve balance and protect life. As master shapeshifters, druids can take on the forms of a variety of beasts, each focused on a specific combat role.</p>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-3 padding-bottomPictures">
                <img class="dh" src="dh.png" alt="" >
            </div>
            <div class="col-sm-8 col-md-8 col-lg-3 ">
                <h2>Demon Hunter</h2>
                <p>Demon hunters embrace the forbidden powers of the Legion. They make use of fel and chaotic magics, metamorphosis abilities, spectral sight, and hellish agility to hunt down and defeat even the most dangerous adversaries.
                </p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-3 padding-bottomPictures">
                <img class="dk" src="dk.png" alt="" >
            </div>
            <div class="col-sm-8 col-md-8 col-lg-3">
                <h2>Death Knight</h2>
                <p>When the Lich King’s control over his death knights was broken, his former champions found their new purpose as Knights of the Ebon Blade. After Bolvar Fordragon donned the helm to keep the undead Scourge contained, he called forth a new generation of death knights to join the Ebon Blade's cause.</p>
            </div>


        </div>
    </div>
</div>
@endsection
