#!groovy

def tryStep(String message, Closure block, Closure tearDown = null) {
    try {
        block()
    }
    catch (Throwable t) {
        slackSend message: "${env.JOB_NAME}: ${message} failure ${env.BUILD_URL}", channel: '#ci-channel-app', color: 'danger'
        throw t
    }
    finally {
        if (tearDown) {
            tearDown()
        }
    }
}

String IMAGE_NAME = "${DOCKER_REGISTRY_NO_PROTOCOL}/fixxx/schuldhulp:${env.BUILD_NUMBER}"

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
            def image = docker.build("${IMAGE_NAME}")
            image.push()
        }
    }
}

String BRANCH = "${env.BRANCH_NAME}"

if (BRANCH == "master" || BRANCH == "develop") {

    node {
        stage('Push acceptance image') {
            tryStep "image tagging", {
                def image = docker.image("${IMAGE_NAME}")
                image.pull()
                image.push("acceptance")  // temporary: we do not want to deploy to, or tag for, ACC now
                //image.push("production")  // permanent: we never want to tag for PROD here
            }
        }
    }

    node {
        stage("Deploy to ACC") {
            tryStep "deployment", {
                build job: 'Subtask_Openstack_Playbook',
                    parameters: [
                        [$class: 'StringParameterValue', name: 'INVENTORY', value: 'acceptance'],
                        [$class: 'StringParameterValue', name: 'PLAYBOOK', value: 'deploy.yml'],
                        [$class: 'StringParameterValue', name: 'PLAYBOOKPARAMS', value: "-e cmdb_id=app_schuldhulp"]
                    ]
            }
        }
    }
    
}
if (BRANCH == "master") {

    stage('Waiting for approval') {
        slackSend channel: '#ci-channel-app', color: 'warning', message: 'schuldhulp is waiting for Production Release - please confirm'
        input "Deploy to Production?"
    }

    node {
        stage('Push production image') {
            tryStep "image tagging", {
                def image = docker.image("${IMAGE_NAME}")
                image.pull()
                image.push("production")
                //image.push("latest")
            }
        }
    }

    node {
        stage("Deploy") {
            tryStep "deployment", {
                build job: 'Subtask_Openstack_Playbook',
                    parameters: [
                        [$class: 'StringParameterValue', name: 'INVENTORY', value: 'production'],
                        [$class: 'StringParameterValue', name: 'PLAYBOOK', value: 'deploy.yml'],
                        [$class: 'StringParameterValue', name: 'PLAYBOOKPARAMS', value: "-e cmdb_id=app_schuldhulp"]
                    ]
            }
        }
    }
}
