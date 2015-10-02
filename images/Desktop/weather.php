<?php

/* current_weather_attribute
 * Retrieves the current weather conditions,
 * the google api exposes a lot more data than this function yields, so modify as required for other information such as future weather.
 * @john Davies
 * @j.davies@optimiseinternet.com
 * 31/3/2011
 * params: condition, temp_f, temp_c humidity, wind_condition,date
 * returns string pertaining to requested parameter.
 */


/*
function current_weather_attribute($att=false){
    if($att=='date' || $att==false){
        $data=time();
    }elseif($att!==false){
        $content = file_get_contents('http://www.google.com/ig/api?weather=wa52uw');
        if ($content !== false) {
           $xml=simplexml_load_string($content);
        } else {
            $xml=false;
        }
        $data=(array)$xml->weather->current_conditions->$att->attributes();
        $data=$data['@attributes']['data'];
    }else{
        $data=false;
    }
    return $data;
}

 print current_weather_attribute('icon');
*/


class weather{

    var $xml;
    var $_current;
    var $_forecast;//array index is offset from today - 0 being today


    function weather($location='london'){
        $content = file_get_contents('http://www.google.com/ig/api?weather='.$location);
        if ($content !== false) {
           $this->xml=simplexml_load_string($content);
        } else {
            $this->xml=false;
        }

		foreach((array)$this->xml->weather->current_conditions as $key =>$val){
			$val=(array)$val['data'];
			$this->_current[$key]=$val['0'];

		}

		for($i=0;$i<4;$i++){
			foreach((array)$this->xml->weather->forecast_conditions[$i] as $key =>$val){
				$val=(array)$val['data'];
				$this->_forecast[$i][$key]=$val['0'];
			}

		}



		print "<pre>".print_r($this->_forecast,true)."</pre>";


    }

    function getCurrentWeather(){
        return $this->_current;
    }

    function getForecast($offset=false,$attribute=false){
        if($offset===false){
            $data=$this->_forecast;
        }else{
            $data=$this->_forecast[(int)$offset];
            if($attribute!==false){
                $data=$data['$attribute'];
            }
        }
        return $data;
    }



}
new weather();


