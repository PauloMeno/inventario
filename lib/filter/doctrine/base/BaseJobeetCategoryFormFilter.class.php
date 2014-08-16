<?php

/**
 * JobeetCategory filter form base class.
 *
 * @package    jobeet
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJobeetCategoryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'jobeet_affiliates_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'JobeetAffiliate')),
    ));

    $this->setValidators(array(
      'name'                   => new sfValidatorPass(array('required' => false)),
      'created_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'jobeet_affiliates_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'JobeetAffiliate', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jobeet_category_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function add
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0001     122720   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0018     264864   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0736    3299368   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0760    3303236   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0761    3304320   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0842    3621564   6. sfDoctrineBuildTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.0450    6775356   7. sfTask->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineBuildTask.class.php:182
    7.0451    6777064   8. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.0457    6778356   9. sfDoctrineBuildFiltersTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.0462    6780568  10. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineBuildFiltersTask.class.php:64
    7.0475    6830992  11. sfDoctrineFormFilterGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.0527    6833620  12. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineFormFilterGenerator.class.php:92
    7.0530    6870776  13. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineFormFilter/default/template/sfDoctrineFormFilterGeneratedTemplate.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.0553    6871696  14. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineFormFilter/default/template/sfDoctrineFormFilterGeneratedTemplate.php:45
    7.0553    6871956  15. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    7.0553    6872764  16. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0001     122720   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0018     264864   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0736    3299368   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0760    3303236   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0761    3304320   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0842    3621564   6. sfDoctrineBuildTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.0450    6775356   7. sfTask->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineBuildTask.class.php:182
    7.0451    6777064   8. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.0457    6778356   9. sfDoctrineBuildFiltersTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.0462    6780568  10. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineBuildFiltersTask.class.php:64
    7.0475    6830992  11. sfDoctrineFormFilterGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.0527    6833620  12. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineFormFilterGenerator.class.php:92
    7.0530    6870776  13. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineFormFilter/default/template/sfDoctrineFormFilterGeneratedTemplate.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.0553    6871696  14. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineFormFilter/default/template/sfDoctrineFormFilterGeneratedTemplate.php:45
    7.0553    6871956  15. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    7.0558    6872972  16. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

ListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.JobeetCategoryAffiliate JobeetCategoryAffiliate')
      ->andWhereIn('JobeetCategoryAffiliate.affiliate_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'JobeetCategory';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'name'                   => 'Text',
      'created_at'             => 'Date',
      'updated_at'             => 'Date',
      'jobeet_affiliates_list' => 'ManyKey',
    );
  }
}
