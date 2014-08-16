<h1>Jobeet jobs List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Category</th>
      <th>Type</th>
      <th>Company</th>
      <th>Logo</th>
      <th>Url</th>
      <th>Position</th>
      <th>Location</th>
      <th>Description</th>
      <th>How to apply</th>
      <th>Token</th>
      <th>Is public</th>
      <th>Is activated</th>
      <th>Email</th>
      <th>Expires at</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($jobeet_jobs as $jobeet_job): ?>
    <tr>
      <td><a href="<?php echo url_for('job/show?

id='.$jobeet_job->get()) ?>"><?php echo $jobeet_job->get

() ?></a></td>
      <td><?php echo $jobeet_job->get

() ?></td>
      <td><?php echo $jobeet_job->get

() ?></td>
      <td><?php echo $jobeet_job->get

() ?></td>
      <td><?php echo $jobeet_job->get

() ?></td>
      <td><?php echo $jobeet_job->get

() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1072    5422744  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1074    5451036  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1144    5486540  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1144    5486800  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1144    5487608  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1072    5422744  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1074    5451036  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1144    5486540  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1144    5486800  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1148    5487816  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1072    5422744  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1074    5451036  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1153    5486540  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1153    5486800  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1153    5487608  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1072    5422744  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1074    5451036  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1153    5486540  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1153    5486800  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1157    5487816  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1072    5422744  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1074    5451036  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1161    5502924  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1161    5503184  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1161    5503992  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1072    5422744  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1074    5451036  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1161    5502924  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1161    5503184  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1165    5504200  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1072    5422744  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1074    5451036  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1169    5502924  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1169    5503184  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1169    5503992  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1072    5422744  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1074    5451036  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1169    5502924  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1169    5503184  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1173    5504200  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1072    5422744  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1074    5451036  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1177    5502924  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1177    5503184  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1177    5503992  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1072    5422744  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1074    5451036  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1177    5502924  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1177    5503184  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1181    5504200  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1072    5422744  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1074    5451036  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1185    5502924  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1185    5503184  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1185    5503992  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1072    5422744  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1074    5451036  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1185    5502924  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1185    5503184  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1189    5520584  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1072    5422744  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1074    5451036  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1193    5519308  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1193    5519568  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1193    5520376  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1072    5422744  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1074    5451036  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1193    5519308  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1193    5519568  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1197    5520584  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1072    5422744  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1074    5451036  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1202    5519308  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1202    5519568  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1202    5520376  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1072    5422744  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1074    5451036  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1202    5519308  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1202    5519568  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1230    5520584  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1072    5422744  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1074    5451036  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1234    5519308  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1234    5519568  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1234    5520376  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1072    5422744  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1074    5451036  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1234    5519308  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1234    5519568  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1238    5536968  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1072    5422744  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1074    5451036  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1243    5535692  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1243    5535952  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1243    5536760  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1072    5422744  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1074    5451036  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1243    5535692  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1243    5535952  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1423    5536968  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1072    5422744  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1074    5451036  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1434    5535692  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1434    5535952  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1434    5536760  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1072    5422744  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1074    5451036  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1434    5535692  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1434    5535952  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1443    5536968  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('job/new') ?>">New</a>
