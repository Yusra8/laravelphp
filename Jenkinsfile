pipeline {
    agent any
	
    environment {
		DOCKERHUB_CREDENTIALS=credentials('dockerhub-credentials')
	}
    stages {
        stage('Docker Login') {
            steps {
                sh 'echo $DOCKERHUB_CREDENTIALS_PSW | docker login -u $DOCKERHUB_CREDENTIALS_USR --password-stdin'
            }
        }
        stage('Build & push Dockerfile') {
            steps {
                  sh '''
		       sh 'chmod +x /var/jenkins_home/workspace/new-laravel-pipeline@tmp/durable-b7266d13/script.sh.copy'

		        docker stop laravel-container || true
		        docker rm laravel-container || true
		        docker rmi Yusra8/laravel-php || true
		        docker build -t Yusra8/laravel-php .
                docker compose up -d
		     //   docker push Yusra8/laravel-php
		        '''
            }
        }
	      //sh '''
		      //  docker compose down
	               // docker stop laravel-container || true
		       // docker rm laravel-container || true
		      //  docker rmi bassam2080/laravel-php || true
		     //   
                             
		//        '''
        stage('Clean') {
            steps {
             echo "hi"
	          sh  'docker compose down'
            }
        }
    }
}
