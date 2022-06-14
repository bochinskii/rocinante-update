pipeline {
    agent {
        label 'master-jen'
    }
    options {
        skipStagesAfterUnstable()
    }
    environment {
        GPG_KEY = credentials('rocinante_gpg_key')
        GPG_PASSWORD = credentials('rocinante_gpg_password')
        GPG_ID = "126833D0A5DBB929717B4CFD5DD2E6DF5EE1E8E3"
    }
    stages {
        stage('Build') {
            steps {
                sh 'gpg --import ./gpg/gpg.pub'
                sh 'gpg --pinentry-mode=loopback --passphrase "$GPG_PASSWORD" --allow-secret-key-import --import $GPG_KEY'
                sh 'gpg --list-key "$GPG_ID"'
                sh 'gpg --list-secret-key "$GPG_ID"'
                sh 'gpg --pinentry-mode=loopback --passphrase "$GPG_PASSWORD" --decrypt -r "$GPG_ID" ./data/rocinante_db_220503.sql.bz.asc > ./data/rocinante_db_220503.sql.bz'
                sh 'gpg --pinentry-mode=loopback --passphrase "$GPG_PASSWORD" --decrypt -r "$GPG_ID" ./data/rocinante_220503.tar.bz.asc > ./data/rocinante_220503.tar.bz'
                sh 'rm -f ./data/{rocinante_db_220503.sql.bz.asc,rocinante_220503.tar.bz.asc}'
            }
        }
    }
}
