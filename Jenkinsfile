def tryStep(String message, Closure block, Closure tearDown = null) {
    try {
        block()
    }
    catch (Throwable t) {
//        slackSend message: "${env.JOB_NAME}: ${message} failure ${env.BUILD_URL}", channel: '#ci-channel-app', color: 'danger'

        throw t
    }
    finally {
        if (tearDown) {
            tearDown()
        }
    }
}


node {
    stage("Checkout") {
        checkout scm
    }

//    stage("Test") {
//        tryStep "testing", {
//            sh "docker-compose -p schuldhulp -f .jenkins-test/docker-compose.yml down"
//            sh "docker-compose -p schuldhulp -f .jenkins-test/docker-compose.yml build && " +
//                    "docker-compose -p schuldhulp -f .jenkins-test/docker-compose.yml run -u root --rm tests"
//        }
//
//    }

    stage("Build image") {
        tryStep "build", {
            echo 'start git version'
            sh "git rev-parse HEAD > version_file"
            def commit_id = readFile('version_file').trim()
            sh 'echo SOURCE_COMMIT := $commit_id >> .build'
            println commit_id
            echo 'end git version'
            def image = docker.build("build.app.amsterdam.nl:5000/fixxx/schuldhulp:${env.BUILD_NUMBER}")
            image.push()

        }
    }
}



String BRANCH = "${env.BRANCH_NAME}"

if (BRANCH == "master") {

    node {
        stage('Push acceptance image') {
            tryStep "image tagging", {
                def image = docker.image("build.app.amsterdam.nl:5000/fixxx/schuldhulp:${env.BUILD_NUMBER}")
                image.pull()
                image.push("acceptance")
                image.push("production")
            }
        }
    }

    node {
        stage("Deploy to ACC") {
            tryStep "deployment", {
                build job: 'Subtask_Openstack_Playbook',
                        parameters: [
                                [$class: 'StringParameterValue', name: 'INVENTORY', value: 'acceptance'],
                                [$class: 'StringParameterValue', name: 'PLAYBOOK', value: 'deploy-schuldhulp.yml'],
                        ]
            }
        }
    }


    stage('Waiting for approval') {
        slackSend channel: '#ci-channel-app', color: 'warning', message: 'schuldhulp is waiting for Production Release - please confirm'
        input "Deploy to Production?"
    }

    node {
        stage('Push production image') {
            tryStep "image tagging", {
                def image = docker.image("build.app.amsterdam.nl:5000/fixxx/schuldhulp:${env.BUILD_NUMBER}")
                image.pull()
                image.push("production")
                image.push("latest")
            }
        }
    }

    node {
        stage("Deploy") {
            tryStep "deployment", {
                build job: 'Subtask_Openstack_Playbook',
                        parameters: [
                                [$class: 'StringParameterValue', name: 'INVENTORY', value: 'production'],
                                [$class: 'StringParameterValue', name: 'PLAYBOOK', value: 'deploy-schuldhulp.yml'],
                        ]
            }
        }
    }
}
