/* Candidato  */

# Query received:
# SQL: select * from "users" where "provider_id" = "111118937709617140321" limit 1
# Miliseconds: 13.65
# Seconds: 0.01365


# Query received:
# SQL: insert into "users" ("name", "email", "provider_id", "provider_token", "provider_refresh_token", "profile_photo_path", "updated_at", "created_at") values ("Welen Almeida", "welenalmeida2210@gmail.com", "111118937709617140321", "ya29.a0AfB_byACJZgIgFjOCtJf90r5ZUwx8aQpf1bw_rzIkuBiVFubGS13eaL0Qtxx_xZExIIbd8kfmlnYW6FDpS7ZnURx-poXsdJWZz0pbyC1cChqSaVGQrS3TeHhyCQa_iXzhQUDobgTV1FCeJ1VdHC1ByUABFQrS_hM0LxNaCgYKAaQSARESFQHGX2Mi3NBCrD0uCR9EWBEhGrNVXQ0171", ?, "https://lh3.googleusercontent.com/a/ACg8ocKU8WBp25ESqz2D3WBV6Xi64dz8q5us2GaQcxEsOq5ATE8=s96-c", "2023-12-26 22:23:56", "2023-12-26 22:23:56") returning "id"
# Miliseconds: 2.14
# Seconds: 0.00214


# Query received:
# SQL: select * from "users" where "id" = 11 limit 1
# Miliseconds: 12.92
# Seconds: 0.01292


# Query received:
# SQL: select * from "users" where "id" = 11 limit 1
# Miliseconds: 14.27
# Seconds: 0.01427


# Query received:
# SQL: select * from "users" where "users"."id" = 11 limit 1
# Miliseconds: 0.73
# Seconds: 0.00073


# Query received:
# SQL: select * from "telefones" where "telefones"."user_id" = 11 and "telefones"."user_id" is not null
# Miliseconds: 0.9
# Seconds: 0.0009


# Query received:
# SQL: select * from "users" where "id" = 11 limit 1
# Miliseconds: 11.92
# Seconds: 0.01192


# Query received:
# SQL: select * from "users" where "users"."id" = 11 limit 1
# Miliseconds: 0.84
# Seconds: 0.00084


# Query received:
# SQL: update "users" set "tipo_conta" = "candidato", "updated_at" = "2023-12-26 22:25:55" where "id" = 11
# Miliseconds: 1.91
# Seconds: 0.00191


# Query received:
# SQL: select * from "users" where "id" = 11 limit 1
# Miliseconds: 11.69
# Seconds: 0.01169


# Query received:
# SQL: select * from "users" where "users"."id" = 11 limit 1
# Miliseconds: 1.01
# Seconds: 0.00101


# Query received:
# SQL: select * from "estados" where "nome" = "RN" limit 1
# Miliseconds: 0.8
# Seconds: 0.0008


# Query received:
# SQL: insert into "estados" ("nome", "updated_at", "created_at") values ("RN", "2023-12-26 22:26:10", "2023-12-26 22:26:10") returning "id"
# Miliseconds: 1.18
# Seconds: 0.00118


# Query received:
# SQL: select * from "cidades" where "cep" = "59218-000" limit 1
# Miliseconds: 0.7
# Seconds: 0.0007


# Query received:
# SQL: insert into "cidades" ("nome", "cep", "estado_id", "updated_at", "created_at") values ("Passa e Fica", "59218-000", 1, "2023-12-26 22:26:10", "2023-12-26 22:26:10") returning "id"
# Miliseconds: 1.21
# Seconds: 0.00121


# Query received:
# SQL: insert into "enderecos" ("bairro", "rua", "numero", "complemento", "cidade_id", "updated_at", "created_at") values ("Centro", "Avenida Principal", "73", "sdadadadada", 1, "2023-12-26 22:26:10", "2023-12-26 22:26:10") returning "id"
# Miliseconds: 1.3
# Seconds: 0.0013


# Query received:
# SQL: update "users" set "endereco_id" = 1, "updated_at" = "2023-12-26 22:26:10" where "id" = 11
# Miliseconds: 1.6
# Seconds: 0.0016


# Query received:
# SQL: insert into "telefones" ("celular", "fixo", "user_id", "updated_at", "created_at") values ("(11) 94002-8922", "4002-8922", 11, "2023-12-26 22:26:10", "2023-12-26 22:26:10") returning "id"
# Miliseconds: 1.86
# Seconds: 0.00186


# Query received:
# SQL: select * from "users" where "id" = 11 limit 1
# Miliseconds: 11.92
# Seconds: 0.01192


# Query received:
# SQL: select * from "candidatos" where "user_id" = 11 limit 1
# Miliseconds: 0.87
# Seconds: 0.00087


# Query received:
# SQL: select * from "users" where "id" = 11 limit 1
# Miliseconds: 12.7
# Seconds: 0.0127


# Query received:
# SQL: select * from "areas" order by "nome" asc
# Miliseconds: 0.95
# Seconds: 0.00095


# Query received:
# SQL: select * from "users" where "id" = 11 limit 1
# Miliseconds: 13.2
# Seconds: 0.0132


# Query received:
# SQL: insert into "candidatos" ("user_id", "sobre", "area_id", "curriculo", "updated_at", "created_at") values (11, "sdadadada", "2", "curriculos/2023-12-26 22:27:38.pdf", "2023-12-26 22:27:38", "2023-12-26 22:27:38") returning "id"
# Miliseconds: 3.21
# Seconds: 0.00321


# Query received:
# SQL: insert into "formacaos" ("instituto", "tipo", "curso", "cursando", "candidato_id", "updated_at", "created_at") values ("ifrn", "s", "ads", "c", 1, "2023-12-26 22:27:38", "2023-12-26 22:27:38") returning "id"
# Miliseconds: 1.85
# Seconds: 0.00185


# Query received:
# SQL: insert into "experiencas" ("empresa", "descricao", "trabalhando", "candidato_id", "updated_at", "created_at") values ("programador 3", "dadsada", "s", 1, "2023-12-26 22:27:38", "2023-12-26 22:27:38") returning "id"
# Miliseconds: 1.72
# Seconds: 0.00172


# Query received:
# SQL: select * from "users" where "id" = 11 limit 1
# Miliseconds: 15.68
# Seconds: 0.01568


# Query received:
# SQL: select * from "candidatos" where "user_id" = 11 limit 1
# Miliseconds: 0.99
# Seconds: 0.00099


# Query received:
# SQL: select * from "users" where "id" = 11 limit 1
# Miliseconds: 17.17
# Seconds: 0.01717


# Query received:
# SQL: select * from "candidatos" where "candidatos"."user_id" = 11 and "candidatos"."user_id" is not null limit 1
# Miliseconds: 1.84
# Seconds: 0.00184


# Query received:
# SQL: select * from "candidaturas" where "candidaturas"."candidato_id" = 1 and "candidaturas"."candidato_id" is not null
# Miliseconds: 1.03
# Seconds: 0.00103


/* Empresa */

# Query received:
# SQL: select * from "users" where "provider_id" = "109107722300789312071" limit 1
# Miliseconds: 14.74
# Seconds: 0.01474


# Query received:
# SQL: insert into "users" ("name", "email", "provider_id", "provider_token", "provider_refresh_token", "profile_photo_path", "updated_at", "created_at") values ("Welen Almedia", "welencorp@gmail.com", "109107722300789312071", "ya29.a0AfB_byDM2Rd-PQWCyVFDTxgWkBmMO8Q0-BQyjB-TUzeWsSSsZk4tNY3pt_BFMtJjdmXRDiyN3QqSQkH2lfPAehdOFWnBEy1NINw-gTHz0YpjWuJ1MkMfBeH71nycGrFz4VBK4DsB54L4pFeQ9mW72b3T1HLdx2-G9dAaaCgYKAVQSARASFQHGX2MiKRcmCC7u9bMgye3trmfyHg0171", ?, "https://lh3.googleusercontent.com/a/ACg8ocJn_aHOn1dx3K_kYq_WtT_eagHvgdcGPBCkNqNy4Bd_=s96-c", "2023-12-26 22:32:30", "2023-12-26 22:32:30") returning "id"
# Miliseconds: 1.96
# Seconds: 0.00196


# Query received:
# SQL: select * from "users" where "id" = 12 limit 1
# Miliseconds: 13.4
# Seconds: 0.0134


# Query received:
# SQL: select * from "users" where "id" = 12 limit 1
# Miliseconds: 14.08
# Seconds: 0.01408


# Query received:
# SQL: select * from "users" where "users"."id" = 12 limit 1
# Miliseconds: 0.74
# Seconds: 0.00074


# Query received:
# SQL: select * from "telefones" where "telefones"."user_id" = 12 and "telefones"."user_id" is not null
# Miliseconds: 0.72
# Seconds: 0.00072


# Query received:
# SQL: select * from "users" where "id" = 12 limit 1
# Miliseconds: 12.07
# Seconds: 0.01207


# Query received:
# SQL: select * from "users" where "users"."id" = 12 limit 1
# Miliseconds: 0.82
# Seconds: 0.00082


# Query received:
# SQL: update "users" set "tipo_conta" = "empresa", "updated_at" = "2023-12-26 22:32:35" where "id" = 12
# Miliseconds: 1.83
# Seconds: 0.00183


# Query received:
# SQL: select * from "users" where "id" = 12 limit 1
# Miliseconds: 13.89
# Seconds: 0.01389


# Query received:
# SQL: select * from "users" where "users"."id" = 12 limit 1
# Miliseconds: 0.8
# Seconds: 0.0008


# Query received:
# SQL: select * from "estados" where "nome" = "RN" limit 1
# Miliseconds: 0.86
# Seconds: 0.00086


# Query received:
# SQL: select * from "cidades" where "cep" = "59218-000" limit 1
# Miliseconds: 0.57
# Seconds: 0.00057


# Query received:
# SQL: insert into "enderecos" ("bairro", "rua", "numero", "complemento", "cidade_id", "updated_at", "created_at") values ("Centro", "Avenida Principal", "73", "sdadadadada", 1, "2023-12-26 22:32:46", "2023-12-26 22:32:46") returning "id"
# Miliseconds: 1.54
# Seconds: 0.00154


# Query received:
# SQL: update "users" set "endereco_id" = 2, "updated_at" = "2023-12-26 22:32:46" where "id" = 12
# Miliseconds: 2.68
# Seconds: 0.00268


# Query received:
# SQL: insert into "telefones" ("celular", "fixo", "user_id", "updated_at", "created_at") values ("(11) 94002-8922", "4002-8922", 12, "2023-12-26 22:32:46", "2023-12-26 22:32:46") returning "id"
# Miliseconds: 1.33
# Seconds: 0.00133


# Query received:
# SQL: select * from "users" where "id" = 12 limit 1
# Miliseconds: 17.78
# Seconds: 0.01778


# Query received:
# SQL: select * from "empresas" where "user_id" = 12 limit 1
# Miliseconds: 1.02
# Seconds: 0.00102


# Query received:
# SQL: select * from "users" where "id" = 12 limit 1
# Miliseconds: 16.87
# Seconds: 0.01687


# Query received:
# SQL: select * from "users" where "id" = 12 limit 1
# Miliseconds: 12.46
# Seconds: 0.01246


# Query received:
# SQL: insert into "empresas" ("user_id", "cnpj", "descricao", "updated_at", "created_at") values (12, "12.345.678/9000-01", "asasdadada", "2023-12-26 22:32:51", "2023-12-26 22:32:51") returning "id"
# Miliseconds: 2.75
# Seconds: 0.00275


# Query received:
# SQL: select * from "users" where "id" = 12 limit 1
# Miliseconds: 15.52
# Seconds: 0.01552


# Query received:
# SQL: select * from "empresas" where "user_id" = 12 limit 1
# Miliseconds: 0.83
# Seconds: 0.00083


# Query received:
# SQL: select * from "users" where "id" = 12 limit 1
# Miliseconds: 14.08
# Seconds: 0.01408


# Query received:
# SQL: select * from "empresas" where "empresas"."user_id" = 12 and "empresas"."user_id" is not null limit 1
# Miliseconds: 0.88
# Seconds: 0.00088


# Query received:
# SQL: select * from "vagas" where "vagas"."empresa_id" = 1 and "vagas"."empresa_id" is not null
# Miliseconds: 0.74
# Seconds: 0.00074


# Query received:
# SQL: select * from "areas"
# Miliseconds: 15.03
# Seconds: 0.01503


# Query received:
# SQL: select * from "users" where "id" = 12 limit 1
# Miliseconds: 1.13
# Seconds: 0.00113


# Query received:
# SQL: select * from "users" where "id" = 12 limit 1
# Miliseconds: 12.16
# Seconds: 0.01216


# Query received:
# SQL: select * from "empresas" where "user_id" = 12 limit 1
# Miliseconds: 0.85
# Seconds: 0.00085


# Query received:
# SQL: select * from "vinculos" where "nome" = "FR" limit 1
# Miliseconds: 0.96
# Seconds: 0.00096


# Query received:
# SQL: insert into "vinculos" ("nome", "updated_at", "created_at") values ("FR", "2023-12-26 22:33:18", "2023-12-26 22:33:18") returning "id"
# Miliseconds: 1.79
# Seconds: 0.00179


# Query received:
# SQL: select * from "empresas" where "empresas"."user_id" = 12 and "empresas"."user_id" is not null limit 1
# Miliseconds: 0.66
# Seconds: 0.00066


# Query received:
# SQL: insert into "vagas" ("empresa_id", "titulo", "descricao", "area_id", "vinculo_id", "updated_at", "created_at") values (1, "Programador", "adadadad", "2", 1, "2023-12-26 22:33:18", "2023-12-26 22:33:18") returning "id"
# Miliseconds: 2.63
# Seconds: 0.00263


# Query received:
# SQL: insert into "atribuitos" ("titulo", "vaga_id", "updated_at", "created_at") values ("O programador deverá fazer tudo e mais um pouco", 1, "2023-12-26 22:33:18", "2023-12-26 22:33:18") returning "id"
# Miliseconds: 2.88
# Seconds: 0.00288


# Query received:
# SQL: insert into "requisitos" ("titulo", "vaga_id", "updated_at", "created_at") values ("Ter disponibilidade para ser escravo", 1, "2023-12-26 22:33:18", "2023-12-26 22:33:18") returning "id"
# Miliseconds: 3.55
# Seconds: 0.00355


# Query received:
# SQL: select * from "users" where "id" = 12 limit 1
# Miliseconds: 14.32
# Seconds: 0.01432


# Query received:
# SQL: select * from "empresas" where "user_id" = 12 limit 1
# Miliseconds: 0.69
# Seconds: 0.00069


# Query received:
# SQL: select * from "users" where "id" = 12 limit 1
# Miliseconds: 14.79
# Seconds: 0.01479


# Query received:
# SQL: select * from "empresas" where "empresas"."user_id" = 12 and "empresas"."user_id" is not null limit 1
# Miliseconds: 0.83
# Seconds: 0.00083


# Query received:
# SQL: select * from "vagas" where "vagas"."empresa_id" = 1 and "vagas"."empresa_id" is not null
# Miliseconds: 0.94
# Seconds: 0.00094


# Query received:
# SQL: select * from "areas" where "areas"."id" = 2 limit 1
# Miliseconds: 1.36
# Seconds: 0.00136


# Query received:
# SQL: select * from "candidaturas" where "candidaturas"."vaga_id" = 1 and "candidaturas"."vaga_id" is not null
# Miliseconds: 1.7
# Seconds: 0.0017


# Query received:
# SQL: select * from "vagas" where "id" = "1" limit 1
# Miliseconds: 14.81
# Seconds: 0.01481


# Query received:
# SQL: select count(*) as aggregate from "candidaturas" where "candidaturas"."vaga_id" = 1 and "candidaturas"."vaga_id" is not null
# Miliseconds: 2.86
# Seconds: 0.00286


# Query received:
# SQL: select * from "users" where "id" = 12 limit 1
# Miliseconds: 1.17
# Seconds: 0.00117


# Query received:
# SQL: select * from "vinculos" where "vinculos"."id" = 1 limit 1
# Miliseconds: 1.05
# Seconds: 0.00105


# Query received:
# SQL: select * from "atribuitos" where "atribuitos"."vaga_id" = 1 and "atribuitos"."vaga_id" is not null
# Miliseconds: 1.3
# Seconds: 0.0013


# Query received:
# SQL: select * from "requisitos" where "requisitos"."vaga_id" = 1 and "requisitos"."vaga_id" is not null
# Miliseconds: 2.56
# Seconds: 0.00256


# Query received:
# SQL: select * from "empresas" where "empresas"."id" = 1 limit 1
# Miliseconds: 1.37
# Seconds: 0.00137


# Query received:
# SQL: select * from "users" where "users"."id" = 12 limit 1
# Miliseconds: 0.9
# Seconds: 0.0009


# Query received:
# SQL: select * from "vagas" where "id" = "1" limit 1
# Miliseconds: 14.03
# Seconds: 0.01403


# Query received:
# SQL: select * from "areas"
# Miliseconds: 0.78
# Seconds: 0.00078


# Query received:
# SQL: select * from "users" where "id" = 12 limit 1
# Miliseconds: 0.8
# Seconds: 0.0008


# Query received:
# SQL: select * from "atribuitos" where "atribuitos"."vaga_id" = 1 and "atribuitos"."vaga_id" is not null
# Miliseconds: 1.06
# Seconds: 0.00106


# Query received:
# SQL: select * from "requisitos" where "requisitos"."vaga_id" = 1 and "requisitos"."vaga_id" is not null
# Miliseconds: 1.09
# Seconds: 0.00109


# Query received:
# SQL: select * from "vagas" where "id" = "1" limit 1
# Miliseconds: 12.44
# Seconds: 0.01244


# Query received:
# SQL: select * from "users" where "id" = 12 limit 1
# Miliseconds: 0.86
# Seconds: 0.00086


# Query received:
# SQL: select * from "empresas" where "user_id" = 12 limit 1
# Miliseconds: 1.04
# Seconds: 0.00104


# Query received:
# SQL: select * from "vinculos" where "nome" = "PJ" limit 1
# Miliseconds: 1.52
# Seconds: 0.00152


# Query received:
# SQL: insert into "vinculos" ("nome", "updated_at", "created_at") values ("PJ", "2023-12-26 22:33:43", "2023-12-26 22:33:43") returning "id"
# Miliseconds: 1.22
# Seconds: 0.00122


# Query received:
# SQL: update "vagas" set "area_id" = "1", "vinculo_id" = 2, "updated_at" = "2023-12-26 22:33:43" where "id" = 1
# Miliseconds: 1.74
# Seconds: 0.00174


# Query received:
# SQL: select * from "atribuitos" where "atribuitos"."id" = 1 limit 1
# Miliseconds: 0.98
# Seconds: 0.00098


# Query received:
# SQL: select * from "requisitos" where "requisitos"."id" = 1 limit 1
# Miliseconds: 1.02
# Seconds: 0.00102


# Query received:
# SQL: insert into "requisitos" ("titulo", "vaga_id", "updated_at", "created_at") values ("O programador precisa ter feito doutorado em Havard e precisa saber Alemão para Trabalhar no Brasil", 1, "2023-12-26 22:33:43", "2023-12-26 22:33:43") returning "id"
# Miliseconds: 2.42
# Seconds: 0.00242


# Query received:
# SQL: select * from "users" where "id" = 12 limit 1
# Miliseconds: 15.69
# Seconds: 0.01569


# Query received:
# SQL: select * from "empresas" where "user_id" = 12 limit 1
# Miliseconds: 1.25
# Seconds: 0.00125


# Query received:
# SQL: select * from "users" where "id" = 12 limit 1
# Miliseconds: 14.54
# Seconds: 0.01454


# Query received:
# SQL: select * from "empresas" where "empresas"."user_id" = 12 and "empresas"."user_id" is not null limit 1
# Miliseconds: 0.84
# Seconds: 0.00084


# Query received:
# SQL: select * from "vagas" where "vagas"."empresa_id" = 1 and "vagas"."empresa_id" is not null
# Miliseconds: 1.04
# Seconds: 0.00104


# Query received:
# SQL: select * from "areas" where "areas"."id" = 1 limit 1
# Miliseconds: 2.07
# Seconds: 0.00207


# Query received:
# SQL: select * from "candidaturas" where "candidaturas"."vaga_id" = 1 and "candidaturas"."vaga_id" is not null
# Miliseconds: 0.93
# Seconds: 0.00093


# Query received:
# SQL: select * from "vagas" where "id" = "1" limit 1
# Miliseconds: 12.97
# Seconds: 0.01297


# Query received:
# SQL: select count(*) as aggregate from "candidaturas" where "candidaturas"."vaga_id" = 1 and "candidaturas"."vaga_id" is not null
# Miliseconds: 1.35
# Seconds: 0.00135


# Query received:
# SQL: select * from "users" where "id" = 12 limit 1
# Miliseconds: 0.67
# Seconds: 0.00067


# Query received:
# SQL: select * from "vinculos" where "vinculos"."id" = 2 limit 1
# Miliseconds: 0.58
# Seconds: 0.00058


# Query received:
# SQL: select * from "atribuitos" where "atribuitos"."vaga_id" = 1 and "atribuitos"."vaga_id" is not null
# Miliseconds: 0.95
# Seconds: 0.00095


# Query received:
# SQL: select * from "requisitos" where "requisitos"."vaga_id" = 1 and "requisitos"."vaga_id" is not null
# Miliseconds: 0.93
# Seconds: 0.00093


# Query received:
# SQL: select * from "empresas" where "empresas"."id" = 1 limit 1
# Miliseconds: 1.33
# Seconds: 0.00133


# Query received:
# SQL: select * from "users" where "users"."id" = 12 limit 1
# Miliseconds: 1.69
# Seconds: 0.00169


# Query received:
# SQL: select * from "vagas" where "id" = "1" limit 1
# Miliseconds: 13.11
# Seconds: 0.01311


# Query received:
# SQL: select * from "users" where "id" = 12 limit 1
# Miliseconds: 1.37
# Seconds: 0.00137


# Query received:
# SQL: select * from "empresas" where "user_id" = 12 limit 1
# Miliseconds: 0.96
# Seconds: 0.00096


# Query received:
# SQL: delete from "vagas" where "id" = 1
# Miliseconds: 2.74
# Seconds: 0.00274


# Query received:
# SQL: select * from "users" where "id" = 12 limit 1
# Miliseconds: 15.28
# Seconds: 0.01528


# Query received:
# SQL: select * from "empresas" where "user_id" = 12 limit 1
# Miliseconds: 0.85
# Seconds: 0.00085


# Query received:
# SQL: select * from "users" where "id" = 12 limit 1
# Miliseconds: 16.27
# Seconds: 0.01627


# Query received:
# SQL: select * from "empresas" where "empresas"."user_id" = 12 and "empresas"."user_id" is not null limit 1
# Miliseconds: 1.15
# Seconds: 0.00115


# Query received:
# SQL: select * from "vagas" where "vagas"."empresa_id" = 1 and "vagas"."empresa_id" is not null
# Miliseconds: 0.84
# Seconds: 0.00084

/* Candidatura */ 

# Query received:
# SQL: select * from "vagas"
# Miliseconds: 14.88
# Seconds: 0.01488


# Query received:
# SQL: select * from "areas" order by "nome" asc
# Miliseconds: 1.16
# Seconds: 0.00116


# Query received:
# SQL: select * from "users" where "id" = 11 limit 1
# Miliseconds: 0.91
# Seconds: 0.00091


# Query received:
# SQL: select * from "vagas" where "id" = "2" limit 1
# Miliseconds: 13.8
# Seconds: 0.0138


# Query received:
# SQL: select count(*) as aggregate from "candidaturas" where "candidaturas"."vaga_id" = 2 and "candidaturas"."vaga_id" is not null
# Miliseconds: 0.83
# Seconds: 0.00083


# Query received:
# SQL: select * from "users" where "id" = 11 limit 1
# Miliseconds: 0.86
# Seconds: 0.00086


# Query received:
# SQL: select * from "vinculos" where "vinculos"."id" = 2 limit 1
# Miliseconds: 2.14
# Seconds: 0.00214


# Query received:
# SQL: select * from "atribuitos" where "atribuitos"."vaga_id" = 2 and "atribuitos"."vaga_id" is not null
# Miliseconds: 1.13
# Seconds: 0.00113


# Query received:
# SQL: select * from "requisitos" where "requisitos"."vaga_id" = 2 and "requisitos"."vaga_id" is not null
# Miliseconds: 0.95
# Seconds: 0.00095


# Query received:
# SQL: select * from "empresas" where "empresas"."id" = 1 limit 1
# Miliseconds: 1.44
# Seconds: 0.00144


# Query received:
# SQL: select * from "users" where "users"."id" = 12 limit 1
# Miliseconds: 1.02
# Seconds: 0.00102


# Query received:
# SQL: select * from "candidatos" where "user_id" = 11 limit 1
# Miliseconds: 1.09
# Seconds: 0.00109


# Query received:
# SQL: select * from "candidaturas" where "candidaturas"."candidato_id" = 1 and "candidaturas"."candidato_id" is not null and "vaga_id" = 2 limit 1
# Miliseconds: 0.88
# Seconds: 0.00088


# Query received:
# SQL: select * from "users" where "id" = 11 limit 1
# Miliseconds: 13.79
# Seconds: 0.01379


# Query received:
# SQL: select * from "candidatos" where "candidatos"."user_id" = 11 and "candidatos"."user_id" is not null limit 1
# Miliseconds: 1.05
# Seconds: 0.00105


# Query received:
# SQL: insert into "candidaturas" ("vaga_id", "candidato_id", "updated_at", "created_at") values ("2", 1, "2023-12-26 22:38:47", "2023-12-26 22:38:47") returning "id"
# Miliseconds: 2.97
# Seconds: 0.00297


# Query received:
# SQL: select * from "users" where "id" = 11 limit 1
# Miliseconds: 31.76
# Seconds: 0.03176


# Query received:
# SQL: select * from "candidatos" where "user_id" = 11 limit 1
# Miliseconds: 1.18
# Seconds: 0.00118


# Query received:
# SQL: select * from "users" where "id" = 11 limit 1
# Miliseconds: 17.36
# Seconds: 0.01736


# Query received:
# SQL: select * from "candidatos" where "candidatos"."user_id" = 11 and "candidatos"."user_id" is not null limit 1
# Miliseconds: 0.71
# Seconds: 0.00071


# Query received:
# SQL: select * from "candidaturas" where "candidaturas"."candidato_id" = 1 and "candidaturas"."candidato_id" is not null
# Miliseconds: 1.68
# Seconds: 0.00168


# Query received:
# SQL: select * from "vagas" where "vagas"."id" = 2 limit 1
# Miliseconds: 0.81
# Seconds: 0.00081


# Query received:
# SQL: select * from "areas" where "areas"."id" = 1 limit 1
# Miliseconds: 0.69
# Seconds: 0.00069


# Query received:
# SQL: select * from "empresas" where "empresas"."id" = 1 limit 1
# Miliseconds: 0.92
# Seconds: 0.00092


# Query received:
# SQL: select * from "users" where "users"."id" = 12 limit 1
# Miliseconds: 0.66
# Seconds: 0.00066


# Query received:
# SQL: select * from "users" where "id" = 11 limit 1
# Miliseconds: 13.28
# Seconds: 0.01328


# Query received:
# SQL: select * from "candidaturas" where "id" = "1" limit 1
# Miliseconds: 0.74
# Seconds: 0.00074


# Query received:
# SQL: select * from "candidatos" where "user_id" = 11 limit 1
# Miliseconds: 0.58
# Seconds: 0.00058


# Query received:
# SQL: delete from "candidaturas" where "id" = 1
# Miliseconds: 2.26
# Seconds: 0.00226


# Query received:
# SQL: select * from "users" where "id" = 11 limit 1
# Miliseconds: 18.77
# Seconds: 0.01877


# Query received:
# SQL: select * from "candidatos" where "user_id" = 11 limit 1
# Miliseconds: 0.95
# Seconds: 0.00095


# Query received:
# SQL: select * from "users" where "id" = 11 limit 1
# Miliseconds: 15.55
# Seconds: 0.01555


# Query received:
# SQL: select * from "candidatos" where "candidatos"."user_id" = 11 and "candidatos"."user_id" is not null limit 1
# Miliseconds: 0.89
# Seconds: 0.00089


# Query received:
# SQL: select * from "candidaturas" where "candidaturas"."candidato_id" = 1 and "candidaturas"."candidato_id" is not null
# Miliseconds: 0.8
# Seconds: 0.0008

/* Selects */

select * from "candidatos" where "candidatos"."user_id" = ? and "candidatos"."user_id" is not null limit 1;

select * from "areas" order by "nome" asc;

select * from "candidatos" where "candidatos"."user_id" = ? and "candidatos"."user_id" is not null limit 1

select * from "users" where "users"."id" = ? limit 1

select * from "estados" where "nome" = ? limit 1

select * from "candidatos" where "candidatos"."user_id" = ? and "candidatos"."user_id" is not null limit 1

select * from "formacaos" where "formacaos"."candidato_id" = ? and "formacaos"."candidato_id" is not null

select * from "experiencas" where "experiencas"."candidato_id" = ? and "experiencas"."candidato_id" is not null

select * from "telefones" where "telefones"."user_id" = ? and "telefones"."user_id" is not null

select * from "empresas" where "user_id" = ? limit 1
