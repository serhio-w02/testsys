<?php
// FrontAdvert.php
namespace frontend\widgets\frontadvert;

use yii\base\Widget;

class FrontAdvert extends Widget {

    public $model;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        // render title
        //$html = '<h2>' . $this->model->title . '</h2>';
		$html = '<h2>' . $this->model->naslov . '</h2>';

         // render image
        $html .= '<p>';
        //$html .= '<img src="' . $this->model->image . '" />';
		$html .=  $this->model->povzetek ;
        $html .= '</p>';
		$html .= '<div style=" text-align: right">';
		$html .=  'spisal: '.$this->model->avtor ;
		$html .= '</div>';

         // render up and down icon
        //$html .= '<div>';
        //$html .= '<a class="up-vote"><i class="fa fa-thumbs-o-up"></i></a>';
        //$html .= '&nbsp;&nbsp;&nbsp;&nbsp;';
        //$html .= '<a class="down-vote"><i class="fa fa-thumbs-o-down"></i></a>';
        //$html .= '</div>';

        // register fontawesome CSS
        //$fontawesome_url = 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css';
        //$this->getView()->registerCssFile($fontawesome_url, [], 'FrontAdvertWidget-fontawesome');

        // return html content for rendering
        return $html;
    }
}
?>