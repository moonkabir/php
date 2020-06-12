<?php
//interface segregation
//ekta interface er modde ai related e function implemet korte hobe
interface Vehicle{
    function getMileage();
    function getName();
    function getPrice();
}

interface TwoWheelers{}
interface FourWheeleres{}
interface SixWheeleres{}

class MotorCycle implements Vehicle, TwoWheelers{}
class Truck implements Vehicle, SixWheeleres{}