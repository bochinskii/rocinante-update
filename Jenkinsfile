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
        SSH_CONFIG_NAME = "rocinante-lemp"
        SSH_KEY = credentials('rocinante_ssh_key')
        SITE_DIR = "/var/www/html/rocinante"
        IP_ADDRESS = "3.71.101.191"
        ARCHIVE_NAME = "rocinante_220503.tar.bz"
    }
    stages {
        stage('Decript') {
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
        stage('SSH transfer') {
            steps {
                sshPublisher(
                    publishers: [
                            sshPublisherDesc(
                                configName: "$SSH_CONFIG_NAME",
                                sshCredentials: [
                                    keyPath: "${SSH_KEY}",
                                    username: 'ec2-user'
                                ],
                                transfers: [
                                    sshTransfer(
                                        cleanRemote: false,
                                        excludes: '',
                                        execCommand: 'echo "data are transferred"',
                                        execTimeout: 120000,
                                        flatten: false,
                                        makeEmptyDirs: false,
                                        noDefaultExcludes: false,
                                        patternSeparator: '[, ]+',
                                        remoteDirectory: '',
                                        remoteDirectorySDF: false,
                                        removePrefix: '',
                                        sourceFiles: "data/*.bz"
                                    )

                                ],
                                usePromotionTimestamp: false,
                                useWorkspaceInPromotion: false,
                                verbose: false
                            )
                    ]
                )
            }
        }
        stage('Deployment') {
            steps {
                sh 'ssh -i $SSH_KEY -o StrictHostKeyChecking=no -p 22 ec2-user@$IP_ADDRESS sudo rm -fr $SITE_DIR/www'
                sh 'ssh -i $SSH_KEY -o StrictHostKeyChecking=no -p 22 ec2-user@$IP_ADDRESS sudo mkdir $SITE_DIR/www'
                sh 'ssh -i $SSH_KEY -o StrictHostKeyChecking=no -p 22 ec2-user@$IP_ADDRESS sudo tar -xvf /home/ec2-user/data/$ARCHIVE_NAME -C $SITE_DIR/www --strip-components=1'
                sh 'ssh -i $SSH_KEY -o StrictHostKeyChecking=no -p 22 ec2-user@$IP_ADDRESS sudo chown -R nginx: $SITE_DIR/www'
            }
        }
    }
}
