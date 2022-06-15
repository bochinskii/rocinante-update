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
        IP_ADDRESS = "35.159.0.152"
        SSH_PORT = credentials('rocinante_ssh_port')
        ARCHIVE_NAME = "rocinante_220503.tar.bz"
        MYSQL_ADMIN = credentials('rocinante_mysql_admin')
        MYSQL_DRUPAL_DB = credentials('rocinante_mysql_drupal_db')
        DB_DUMP_NAME = "rocinante_db_220503.sql.bz"
        DB_DUMP_NAME_ONLY = "rocinante_db_220503.sql"
    }
    stages {
        stage('Decript') {
            steps {
                sh '''
                    gpg --import ./gpg/gpg.pub
                    gpg --pinentry-mode=loopback --passphrase "$GPG_PASSWORD" --allow-secret-key-import --import $GPG_KEY
                    gpg --list-key "$GPG_ID"
                    gpg --list-secret-key "$GPG_ID"
                    gpg --pinentry-mode=loopback --passphrase "$GPG_PASSWORD" --decrypt -r "$GPG_ID" ./data/rocinante_db_220503.sql.bz.asc > ./data/rocinante_db_220503.sql.bz
                    gpg --pinentry-mode=loopback --passphrase "$GPG_PASSWORD" --decrypt -r "$GPG_ID" ./data/rocinante_220503.tar.bz.asc > ./data/rocinante_220503.tar.bz
                '''
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
        stage('Deployment Site') {
            steps {
                def remote = [
                    name = "rocinante-lemp"
                    host = "$IP_ADDRESS"
                    user = 'ec2-user'
                    identityFile = "$SSH_KEY"
                    port = "$SSH_PORT"
                    allowAnyHosts = true
                ]
                sshCommand remote: remote, command: "sudo rm -fr $SITE_DIR/www"
                sshCommand remote: remote, command: "sudo mkdir $SITE_DIR/www"
                sshCommand remote: remote, command: "sudo tar -xvf /home/ec2-user/data/$ARCHIVE_NAME -C $SITE_DIR/www --strip-components=1"
                sshCommand remote: remote, command: "sudo chown -R nginx: $SITE_DIR/www"
            }
        }
        //stage('Deployment DB') {
        //    steps {
        //        sh '''
        //            ssh -i $SSH_KEY  -o StrictHostKeyChecking=no -p $SSH_PORT ec2-user@$IP_ADDRESS "sudo mysql --connect-expired-password -u$MYSQL_ADMIN_USR -p$MYSQL_ADMIN_PSW -e 'DROP DATABASE IF EXISTS $MYSQL_DRUPAL_DB';"
        //            ssh -i $SSH_KEY  -o StrictHostKeyChecking=no -p $SSH_PORT ec2-user@$IP_ADDRESS "sudo mysql --connect-expired-password -u$MYSQL_ADMIN_USR -p$MYSQL_ADMIN_PSW -e 'CREATE DATABASE $MYSQL_DRUPAL_DB CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';"
        //            ssh -i $SSH_KEY  -o StrictHostKeyChecking=no -p $SSH_PORT ec2-user@$IP_ADDRESS sudo bunzip2 /home/ec2-user/data/$DB_DUMP_NAME
        //            ssh -i $SSH_KEY  -o StrictHostKeyChecking=no -p $SSH_PORT ec2-user@$IP_ADDRESS "sudo mysql --connect-expired-password -u$MYSQL_ADMIN_USR -p$MYSQL_ADMIN_PSW -A -D $MYSQL_DRUPAL_DB < /home/ec2-user/data/$DB_DUMP_NAME_ONLY"
        //        '''
        //    }
        //}
    }
}
